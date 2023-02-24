<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job_applier;
use App\Models\student_personal_info;
use App\Models\visitor;

class dashboardController extends Controller
{
    public function index(){

        $careerAppliers=count(job_applier::where("careers_job",'1')->get());
        $placementAppliers=count(job_applier::where("placements_job",'1')->get());
        $onlineApplications=count(student_personal_info::where("student_viewed","no")->get());
        $totalVisitors=round(visitor::latest('id')->value('totalVisitors')/2);
        $uniqueVisitors=round(visitor::latest('id')->value('uniqueVisitors'));
        return view('admin.dashboard',[
            'careerAppliers'=>$careerAppliers,
            'placementAppliers'=>$placementAppliers,
            'onlineApplications'=>$onlineApplications,
            'totalVisitors'=>$totalVisitors,
            'uniqueVisitors'=>$uniqueVisitors
            ]);
    }
}
