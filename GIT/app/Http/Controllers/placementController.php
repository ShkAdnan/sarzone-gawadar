<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\placement;
use App\Models\job_applier;
use Illuminate\Support\Facades\DB;

class placementController extends Controller
{
    public function index(){
        return view('admin.add_job');
    }
    public function show(){
        $jobs=placement::get();
        return view('admin.views.view_placementsJobs',['jobs'=>$jobs]);
    }
    public function store(Request $req){
        $req->validate([
            'title'=> 'required | min:4',
            'requirements'=> 'required',
            'endDate'=> 'required ',
        ]);

        placement::create([
            'job_title'=>$req->title,
            'job_requirements'=>$req->requirements,
            'job_endDate'=>$req->endDate,
        ]);

        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }

    public function delete($id){
        $job=placement::where('job_id',$id);
        $job->delete();
        return redirect()->back()->with("msg","Job Deleted Successfully")->with("status","danger");
    }


    public function edit($id){
        $job=placement::all()->where('job_id',$id)->first();
        return view('admin.edits.edit_job',['job'=>$job]);
    }


    public function edited(Request $req){
        
        $req->validate([
            'title'=> 'required | min:4',
            'requirements'=> 'required',
            'endDate'=> 'required '
        ]);
        placement::where('job_id',$req->id)->update([
            'job_title'=>$req->title,
            'job_requirements'=>$req->requirements,
            'job_endDate'=>$req->endDate,
        ]);

        return redirect('placement/view')->with("msg","Job Updated Successfully")->with("status","primary");
    }


    public function viewCVs($id){
        $CVs=job_applier::where('job_id',$id)->where('placements_job','1')->get();
        return view('admin.views.view_appliers',['CVs'=>$CVs]);        
    }

    public function closed(){
        $jobs=placement::whereDate('job_endDate',"<",date('Y-m-d'))->get();
        return view('admin.closed_jobs',['jobs'=>$jobs]);
    }
}
