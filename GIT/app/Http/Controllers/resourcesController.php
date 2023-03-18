<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resourcesController extends Controller
{
    function Elibrary(){
        return view('front.E_library');
    }
    function helpDesk(){
        return view('front.helpDesk');
    }
    function FAQ(){
        return view('front.FAQ');
    }
    function timetable(){
        return view('front.timetable');
    }
}
