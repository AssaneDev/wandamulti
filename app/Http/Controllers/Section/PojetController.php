<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\ProjetModel;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;



class PojetController extends Controller
{
       public function SectionProjet()
    {
        
        return view('admin.sections.section_projet');
    }

    // End function SectionProjet

    public function SectionProjetCreate()
    {
        return view('admin.sections.section_projet_create');
    }
    // End function SectionProjetCreate
  public function  SectionProjetStore(Request $request)
{
    $validatedData = $request->validate([
        'nom_projet' => 'required',
        'courtedesc' => 'required',
        'longdescription' => 'required',
        'image_cap' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'image_ban' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'audio' => 'nullable|mimes:mp3,wav,ogg|max:5120', // 5 Mo max
    ]);

    $manager = new ImageManager(new Driver());

    // Traitement image_cap
    $imgCapPath = null;
    if ($request->hasFile('image_cap')) {
        $image = $request->file('image_cap');
        $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $manager->read($image)->resize(584, 500)->toJpeg(80)
            ->save(public_path('upload/image_cap/' . $name));
        $imgCapPath = 'upload/image_cap/' . $name;
    }

    // Traitement image_ban
    $imgBanPath = null;
    if ($request->hasFile('image_ban')) {
        $image = $request->file('image_ban');
        $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $manager->read($image)->resize(584, 500)->toJpeg(80)
            ->save(public_path('upload/image_ban/' . $name));
        $imgBanPath = 'upload/image_ban/' . $name;
    }

    // Traitement audio
    $audioPath = null;
    if ($request->hasFile('audio')) {
        $file = $request->file('audio');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/audio'), $filename);
        $audioPath = 'uploads/audio/' . $filename;
    }

    // Insertion
    ProjetModel::create([
        'nom_service' => $request->nom_projet,
        'petite_desc_service' => $request->courtedesc,
        'long_desc_service' => $request->longdescription,
        'video_youtube' => $request->lien,
        'audio' => $audioPath,
        'photo' => $imgCapPath,
        'photo_banniere' => $imgBanPath,
        'created_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Projet créé avec succès.');
}
}
