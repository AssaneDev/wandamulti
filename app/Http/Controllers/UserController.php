<?php

namespace App\Http\Controllers;

use App\Models\CategorieModel;
use App\Models\ProjetModel;
use App\Models\SectionModel2;


use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function Index(){
         $section2 = SectionModel2::with('detail_service')->get();
         $categories = CategorieModel::all();
         $projet = ProjetModel::with('detail_projet')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('frontend.index', compact('section2','projet', 'categories'));
    }
      
    
}