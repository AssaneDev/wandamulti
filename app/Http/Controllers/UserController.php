<?php

namespace App\Http\Controllers;

use App\Models\ProjetModel;
use App\Models\SectionModel2;


use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function Index(){
         $section2 = SectionModel2::with('detail_service')->get();
         $projet = ProjetModel::with('detail_projet')->get();
        return view('frontend.index', compact('section2','projet'));
    }
      
    
}