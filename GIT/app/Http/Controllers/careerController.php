<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\career;
use App\Models\job_applier;

class careerController extends Controller
{
    public function index(){
        return view('admin.add_careerJob');
    }
    public function show(){
        $jobs=career::get();
        return view('admin.views.view_careerJobs',['jobs'=>$jobs]);
    }
    public function store(Request $req){
        $req->validate([
            'title'=> 'required | min:4',
            'requirements'=> 'required',
            'endDate'=> 'required ',
        ]);

        career::create([
            'job_title'=>$req->title,
            'job_requirements'=>$req->requirements,
            'job_endDate'=>$req->endDate,
        ]);

        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }

    public function delete($id){
        $job=career::where('job_id',$id);
        $job->delete();
        return redirect()->back()->with("msg","Job Deleted Successfully")->with("status","danger");
    }


    public function edit($id){
        $job=career::all()->where('job_id',$id)->first();
        return view('admin.edits.edit_careerJob',['job'=>$job]);
    }


    public function edited(Request $req){
        
        $req->validate([
            'title'=> 'required | min:4',
            'requirements'=> 'required',
            'endDate'=> 'required '
        ]);
        career::where('job_id',$req->id)->update([
            'job_title'=>$req->title,
            'job_requirements'=>$req->requirements,
            'job_endDate'=>$req->endDate,
        ]);

        return redirect('career/view')->with("msg","Job Updated Successfully")->with("status","primary");
    }

    public function viewCVs($id){
        $CVs=job_applier::where('job_id',$id)->where('careers_job','1')->get();
        return view('admin.views.view_appliers',['CVs'=>$CVs]);        
    }

    public function closed(){
        $jobs=career::whereDate('job_endDate',"<",date('Y-m-d'))->get();
        return view('admin.career_closedJobs',['jobs'=>$jobs]);
    }
}
