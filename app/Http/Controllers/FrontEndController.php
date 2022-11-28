<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function Homepage(){
        $a=30;
        $b=20;
        $c=$a+$b;
        $name = 'Rashad';
        $newName= strtoupper($name);
        
        return view('welcome',compact('c','newName'));
    }
    public function aboutUs(){
        return view('about_us');
    }
    public function contactUs(){
        return view('contact_us');
    }
    //model - database operations
    // view  - ui what does the user see
    //controller - controlling
}
