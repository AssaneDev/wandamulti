<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Models\DescriptionProjet;
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


public function SectionProjetStore(Request $request)
{
    // ✅ 1. Validation des données en tout début
    $request->validate([
        'nomprojet' => 'required|string|max:255',
        'courtedesc' => 'required|string|max:255',
        'longdescription' => 'required|string',
        'lien' => 'nullable|url',
        'imagescap' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'imagebanniere' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'audio' => 'nullable|mimes:mp3,wav,ogg|max:20480',
    ]);

    $manager = new ImageManager(new Driver());

    // ✅ 2. Traitement de l'image "imagescap"
    $imgCapPath = null;
    if ($request->hasFile('imagescap')) {
        $image = $request->file('imagescap');
        $name = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/image_cap/' . $name);
        $manager->read($image)->resize(584, 500)->toJpeg(80)->save($path);
        $imgCapPath = 'upload/image_cap/' . $name;
    }

    // ✅ 3. Traitement de l'image "imagebanniere"
    $imgBanPath = null;
    if ($request->hasFile('imagebanniere')) {
        $image = $request->file('imagebanniere');
        $name = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/image_ban/' . $name);
        $manager->read($image)->resize(1028, 621)->toJpeg(80)->save($path);
        $imgBanPath = 'upload/image_ban/' . $name;
    }

    // ✅ 4. Traitement de l'audio
    $audioPath = null;
    if ($request->hasFile('audio')) {
        $file = $request->file('audio');
        $safeName = time() . '_' . preg_replace('/[^a-zA-Z0-9_\.\-]/', '_', $file->getClientOriginalName());
        $file->move(public_path('uploads/audio'), $safeName);
        $audioPath = 'uploads/audio/' . $safeName;
    }

    // ✅ 5. Insertion avec Eloquent
    $projet = new ProjetModel();
    $projet->nom_service = $request->nomprojet;
    $projet->petite_desc_service = $request->courtedesc;
    $projet->long_desc_service = $request->longdescription;
    $projet->video_youtube = $request->lien;
    $projet->audio = $audioPath;
    $projet->photo = $imgCapPath;
    $projet->photo_banniere = $imgBanPath;
    $projet->save();

    // ✅ 6. Insertion dans DescriptionProjet (relation)
    $description = new DescriptionProjet();
    $description->id_projet = $projet->id;
    $description->description = $request->longdescription;
    $description->save();

    // ✅ 7. Retour avec message
    return redirect()->back()->with([
        'message' => 'Projet ajouté avec succès',
        'alert-type' => 'success'
    ]);
}
}