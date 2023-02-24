<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program;
use App\Models\student_personal_info;
use Illuminate\Support\Facades\Storage;
use function PHPSTORM_META\type;

class admissionController extends Controller
{
    public function index(){
        return view('admin.add_program');
    }

    public function show(){
        $programs=program::get();
        return view('admin.views.view_programs',['programs'=>$programs]);
    }
    public function store(Request $req){
        $req->validate([
            'name'=> 'required',
            'preRequisite'=> 'required',
            'duration'=> 'required ',
        ]);

        program::create([
            'program_name'=>$req->name,
            'program_preRequisite'=>$req->preRequisite,
            'program_duration'=>$req->duration,
        ]);

        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }
    public function delete($id){
        program::where('program_id',$id)->delete();

        return redirect()->back()->with("msg","Program Deleted Successfully")->with("status","danger");
    }

    public function edit($id){
        $program=program::where('program_id',$id)->get();
        return view('admin.edits.edit_program',['program'=>$program[0]]);
    }

    public function edited(Request $req){

        $req->validate([
            'name'=> 'required',
            'preRequisite'=> 'required',
            'duration'=> 'required ',
        ]);
        program::where('program_id',$req->id)->update([
            'program_name'=>$req->name,
            'program_preRequisite'=>$req->preRequisite,
            'program_duration'=>$req->duration,
        ]);

        return redirect('admissions/view')->with("msg","Program Updated Successfully")->with("status","primary");
    }


    public function onlineAdmission(){
        $programs=program::get();
        return view('admin.onlineAdmission',['programs'=>$programs]);
    }
    public function online(Request $value){
        program::where('program_id',$value->id)->update([
            'program_online'=>$value->value,
        ]);
    }


    public function onlineApplications(){
        $programs=program::get();

        $countApplications=array();
        foreach ($programs as $program) {
            $countApplications[$program->program_name]=count(student_personal_info::where('program_id',$program->program_id)->get());
        }
        return view('admin.onlineApplicationCourses',['programs'=>$programs,'countApplications'=>$countApplications]);
    }

    public function viewApplications($id){

        $nonViewed=student_personal_info::where('program_id',$id)->where('student_viewed','no')
        ->join('matric_results','student_personal_infos.student_id','matric_results.student_id')
        ->join('inter_results','student_personal_infos.student_id','inter_results.student_id')
        ->select('student_personal_infos.student_id','student_personal_infos.student_CNIC','student_personal_infos.CV','student_personal_infos.student_domicileImg','student_personal_infos.time','matric_results.matric_certificate','inter_results.inter_certificate')
        ->get();
        $viewed=student_personal_info::where('program_id',$id)->where('student_viewed','yes')
        ->join('matric_results','student_personal_infos.student_id','matric_results.student_id')
        ->join('inter_results','student_personal_infos.student_id','inter_results.student_id')
        ->select('student_personal_infos.student_id','student_personal_infos.student_CNIC','student_personal_infos.CV','student_personal_infos.student_domicileImg','student_personal_infos.time','matric_results.matric_certificate','inter_results.inter_certificate')
        ->get();
        return view('admin.views.view_applications',['viewed'=>$viewed,'nonViewed'=>$nonViewed]);

    }

    public function makeViewed($id){
        student_personal_info::where('student_id',$id)->update(['student_viewed'=>"yes"]);
        return redirect()->back()->with("msg","Added to the Viewed Section")->with("status","success");
    }

    public function deleteApplication($id){
        student_personal_info::where('student_id',$id)->delete();
        return redirect()->back()->with("msg","Application Deleted")->with("status","danger");
    }

}
