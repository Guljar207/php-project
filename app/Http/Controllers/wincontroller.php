<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wincontroller extends Controller
{
    //public function mul(){
      //  echo "Hello Gulzar Dodhiya";
    //}
    public function inu()
    {
        $title="Registration form";
        return view('inza')->with('title',$title);
    }

}
