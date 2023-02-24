<?php

namespace App\Http\Controllers;
use App\Models\notice;
use Illuminate\Http\Request;

class noticeController extends Controller
{
    public function index(){
        return view('admin.add_notice');
    }

    public function store(Request $req){
        $req->validate(['title'=>'required']);

        notice::create(['notice_title'=>$req->title]);
        return redirect()
        ->back()
        ->with("msg","Notice Stored Successfully")
        ->with("status","success");
    }

    public function show(){
        $notices=notice::get();
        return view('admin.views.view_notices',['notices'=>$notices]);
    }

    public function delete($id){
        $notice=notice::where('notice_id',$id);
        $notice->delete();
        return redirect()
        ->back()
        ->with("msg","Notice Deleted Successfully")
        ->with("status","danger");
    }
    
    function online(Request $req){
        notice::where('notice_id',$req->id)->update([
            'notice_online'=>$req->value,
        ]);
    }
}
