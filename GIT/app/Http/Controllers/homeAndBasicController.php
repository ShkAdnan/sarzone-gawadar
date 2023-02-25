<?php

namespace App\Http\Controllers;
use App\Models\career;
use App\Models\graduate;
use App\Models\program;
use App\Models\album;
use App\Models\job_applier;
use App\Models\placement;
use App\Models\notice;
use App\Models\stories;
use Illuminate\Http\Request;

class homeAndBasicController extends Controller
{
    public function Index(){
        $albums=album::latest('album_id')->limit(4)->get();
        $stories=stories::limit(4)->get();
        $notices=notice::where('notice_online','true')->get();
        return response()->view('front.index2',['albums'=>$albums,'notices'=>$notices,'stories'=>$stories]);

    }
    public function aboutIndex(){
        return view('front.aboutIntroduction');
    }
    public function careersIndex(){
        $careers=career::get();
        return view('front.careers',['careers'=>$careers]);
    }
    public function facultyIndex(){
        return view('front.faculty');
    }
    public function vocationalFacultyIndex(){
        return view('front.vocationalFaculty');
    }
    public function principleMessage(){
        return view('front.principleMessage');
    }
    public function directorMessage(){
        return view('front.directorMessage');
    }
    public function secrataryMessage(){
        return view('front.secrataryMessage');
    }
    public function programOffered(){
        return view('front.program_offering');
    }
    public function feeStructure(){
        return view('front.fee_structure');
    }
    public function alumnaeList(){
        $graduates=graduate::
        join('programs','graduates.program_id','=','programs.program_id')
        ->select('graduates.*','programs.program_name')
        ->get();
        return view('front.alumnae',['graduates'=>$graduates]);
    }

    public function alumnaeVerify(){
        return view('front.alumnae_verification');
    }

    public function alumnaeAllDetail(Request $req){

        $req->validate(['CNIC'=>'required']);
        $details=graduate::where('graduate_CNIC',$req->CNIC)
        ->join('programs','programs.program_id','graduates.program_id')
        ->select('graduates.*','programs.program_name')
        ->get();
        return view('front.alumnae_verification',['details'=>$details]);
    }
    public function album($id)
    {
        $album=album::
        join('albums_sub_images','albums.album_id','=','albums_sub_images.album_id')
        ->where('albums.album_id','=',$id)
        ->select('albums.*','albums_sub_images.albums_subImages_name')
        ->get();
        return view('front.album',['album'=>$album]);
    }
    public function careerApply(Request $req){
        $req->validate([
            'cv'=>'required | mimes:pdf,jpg,jpeg,doc,docx'
            ]);
        job_applier::create([
            'applier_cv'=>$this->cv($req->cv),
            'job_id'=>$req->jobId,
            'careers_job'=>'1'
        ]);
        return view('front.requestSent');
        // return view('front.successPage');
    }

    public function placementsTable(){
        $placements=placement::whereDate('job_endDate',">",date('Y-m-d'))->get();
        return view('front.placement',['placements'=>$placements]);
    }
    public function applyForm($id,$job_type){
        return view('front.job_form',['myId'=>$id,'job_type'=>$job_type]);
    }
    public function placementApply(Request $req){
        $req->validate([
            'cv'=>'required | mimes:pdf,jpg,jpeg,doc,docx'
            ]);
        job_applier::create([
            'applier_cv'=>$this->cv($req->cv),
            'job_id'=>$req->jobId,
            $req->jobType=>'1'
        ]);
        return view('front.requestSent');
    }

    public function Stories(){
        return view('admin.stories');
    }
    public function add(Request $req){
        stories::create([
            'name'=>$req->title_name,
            'category'=>$req->title,
            'discription'=>$req->description,
            'stories_images'=>$this->images($req->image),
            
        ]);
        return redirect()->back()->with("status","success");
    }
    public function show(){
        $stories=stories::get();
        return view('admin.views.view_stories',['stories'=>$stories]);
    }
    public function editStories($id){
        $stories=stories::all()->where('id',$id)->first();
        return view('admin.edits.adit_stories',['stories'=>$stories]);
    }
    public function updateStories(Request $req){
        
        if ($req->image) {

            stories::where('id',$req->id)->update([
                'name'=>$req->title_name,
                'category'=>$req->title,
                'discription'=>$req->description,
                'stories_images'=>$this->images($req->image)
            ]);
        } else {
            stories::where('id',$req->id)->update([
                'name'=>$req->title_name,
                'category'=>$req->title,
                'discription'=>$req->description,
                // 'stories_images'=>$this->image($req->image)
            ]);
        }


        return redirect()->route('Stories.view')->with("msg","Album Updated Successfully")->with("status","primary");
    }
    public function delete(Request $req,stories $stories)
    {
        $stories = stories::find($req->id);
        $stories->delete();
        return redirect()->back()->with('message', 'bed Deleted Seccessfuly');

    }
    public function cv($cv){

        $filenameWithExt = $cv->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);
        //get just extension
        $extension = $cv->extension();
        $nameToStore = $filename['filename'] . "_".time().".".$extension;
        //Move to folder
        $path = $cv->move('public/upload/CVs/' ,$nameToStore);
        return $nameToStore;

    }
    public function images($cv){

        $filenameWithExt = $cv->getClientOriginalName();
        //get just filename
        $filename = pathinfo($filenameWithExt);
        //get just extension
        $extension = $cv->extension();
        $nameToStore = $filename['filename'] . "_".time().".".$extension;
        //Move to folder
        $path = $cv->move('upload/images/' ,$nameToStore);
        return $nameToStore;

    }
}
