<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\graduate;
use Illuminate\Support\Facades\DB;
use App\Models\program;
class graduateController extends Controller
{
    function index(){
        $programs=program::get();
        return view('admin.add_graduate',['programs'=>$programs]);
    }
    function show(){
        $graduates=DB::table('graduates')->
        join('programs','graduates.program_id','=','programs.program_id')
        ->select('graduates.*','programs.program_name')
        ->get();
        return view('admin.views.view_graduates',['graduates'=>$graduates,]);
    }
    function store(Request $req){
        $req->validate([
            'name'=> 'required | min:4',
            'fatherName'=>'required',
            'contact'=> 'required | numeric',
            'CNIC'=> 'required ',
            'program'=> 'required ',
            'date'=> 'required ',
            'duration'=> 'required ',
            'address'=> 'required '
        ]);

        graduate::create([
            'graduate_name'=>$req->name,
            'graduate_fatherName'=>$req->fatherName,
            'graduate_contact'=>$req->contact,
            'graduate_CNIC'=>$req->CNIC,
            'program_id'=>$req->program,
            'graduate_date'=>$req->date,
            'graduate_duration'=>$req->duration,
            'graduate_address'=>$req->address
        ]);

        return redirect()->back()->with("msg","Stored Successfully")->with("status","success");
    }

    function delete($id){
        $graduate=graduate::where('graduate_id',$id);
        $graduate->delete();
        return redirect()->back()->with("msg","Graduate Deleted Successfully")->with("status","danger");
    }


    function edit($id){
        $graduate=graduate::all()->where('graduate_id',$id)->first();
        $programs=program::get();
        return view('admin.edits.edit_graduate',[
            'graduate'=>$graduate,
            'programs'=>$programs
            ]);
    }


    function edited(Request $req){
        
        $req->validate([
            'name'=> 'required | min:4',
            'contact'=> 'required | numeric',
            'CNIC'=> 'required ',
            'program'=> 'required ',
            'date'=> 'required ',
            'duration'=> 'required ',
            'address'=> 'required '
        ]);
        graduate::where('graduate_id',$req->id)->update([
            'graduate_name'=>$req->name,
            'graduate_contact'=>$req->contact,
            'graduate_CNIC'=>$req->CNIC,
            'program_id'=>$req->program,
            'graduate_date'=>$req->date,
            'graduate_duration'=>$req->duration,
            'graduate_address'=>$req->address
        ]);

        return redirect('graduate/view')->with("msg","Graduate Updated Successfully")->with("status","primary");
    }
}
