<?php

namespace App\Http\Controllers;
use App\Models\SectionModel2;


use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function Index(){
         $section2 = SectionModel2::with('detail_service')->get();
        return view('frontend.index', compact('section2'));
    }
      
    
}