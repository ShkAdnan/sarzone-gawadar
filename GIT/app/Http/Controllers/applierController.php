<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job_applier;
class applierController extends Controller
{
    public function show(){
        $appliers=job_applier::get();
        return view('admin.views.view_appliers',['appliers'=>$appliers]);
    }

    public function delete($id){
        job_applier::where("applier_id",$id)->delete();
        return redirect()->back()->with("msg","Applier Deleted Successfully")->with("status","danger");
    }
    
    public function approve($id){
        job_applier::where('applier_id',$id)->update(['status'=>'Approved']);
        return redirect()
        ->back()
        ->with("msg","Status Changes")
        ->with("status","success");
    }

}
