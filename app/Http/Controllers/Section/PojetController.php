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
   

    $manager = new ImageManager(new Driver());

    // Traitement image_cap
    $imgCapPath = null;
    if ($request->hasFile('imagescap')) {
        $image = $request->file('imagescap');
        $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $manager->read($image)->resize(584, 500)->toJpeg(80)
            ->save(public_path('upload/image_cap/' . $name));
        $imgCapPath = 'upload/image_cap/' . $name;
    }

    // Traitement image_ban
    $imgBanPath = null;
    if ($request->hasFile('imagebanniere')) {
        $image = $request->file('imagebanniere');
        $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $manager->read($image)->resize(1028, 621)->toJpeg(80)
            ->save(public_path('upload/image_ban/' . $name));
        $imgBanPath = 'upload/image_ban/' . $name;
    }

    // Traitement audio
    
    $request->validate([
        'nomprojet' => 'required|string|max:255',
        'courtedesc' => 'required|string|max:255',
        'longdescription' => 'required|string',
        'lien' => 'nullable|url',
        'imagescap' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2 Mo
        'imagebanniere' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2 Mo
        'audio' => 'nullable|mimes:mp3,wav,ogg|max:20480', // 20 Mo
    ]);
    $audioPath = null;
    if ($request->hasFile('audio')) {
        $file = $request->file('audio');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/audio'), $filename);
        $audioPath = 'uploads/audio/' . $filename;
    }

    // Insertion
    ProjetModel::create([
        'nom_service' => $request->nomprojet,
        'petite_desc_service' => $request->courtedesc,
        'long_desc_service' => $request->longdescription,
        'video_youtube' => $request->lien,
        'audio' => $audioPath,
        'photo' => $imgCapPath,
        'photo_banniere' => $imgBanPath,
        'created_at' => now(),
    ]);

    return redirect()->back()->with([
            'message' => 'Service mis à jour avec succès',
            'alert-type' => 'success'
        ]);
}
}
