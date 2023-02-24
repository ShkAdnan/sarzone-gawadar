<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Login extends Controller
{
    function getForm(){
        return view('admin.logIn');
    }
    function login(Request $req){
         //Validation
         $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

    
        $exist = DB::table('users')
        ->where('email' , $req->email)
        ->where('password',$req->password)
        ->count();
        
        if($exist > 0){
            $fetch=DB::table('users')
            ->where('email', $req->email)
            ->where('password',$req->password)
            ->get();
            $req->session()->put("LoggedIn", $fetch[0]->user_id);
            return redirect()->route('dashboard');
        }
        else{
            return 'There is no account link with this email or username';     
        }

        return "working";

    }

    function logOut(){
        session()->flush();
        return redirect('/admin/login');
    }
    
    
    
}
