<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use App\Models\DescriptionProjet;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\ProjetModel;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\CategorieModel;



class PojetController extends Controller
{
       public function SectionProjet()
    {
        $datall = ProjetModel::all();
        return view('admin.sections.section_projet',compact('datall'));
    }

    // End function SectionProjet

    public function SectionProjetCreate()
    {
       $categories = CategorieModel::all();
        
        return view('admin.sections.section_projet_create',compact('categories'));
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
        $file->move(public_path('upload/audio'), $safeName);
        $audioPath = 'upload/audio/'. $safeName;
    }

    // Vérification si le champ categorie_id est présent dans la requête
    if (!$request->has('categorie_id')) {
        return redirect()->back()->with([
            'message' => 'Le champ catégorie est requis',
            'alert-type' => 'error'
        ]);
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
    $projet->categorie_id = $request->categorie_id; // Assurez-vous que le champ categorie_id est présent dans le formulaire
    $projet->save();

    // ✅ 6. Insertion dans DescriptionProjet (relation)
    $description = new DescriptionProjet();
    $description->id_projet = $projet->id;
    $description->description = $request->longdescription;
    $description->save();

    // ✅ 7. Retour avec message
    return redirect()->route('section.projet')->with([
        'message' => 'Projet ajouté avec succès',
        'alert-type' => 'success'
    ]);
}
public function EditProjet($id)
{
    $data = ProjetModel::findOrFail($id);
    //recupération de la catégorie associée
    $categories = CategorieModel::all();
    return view('admin.sections.section_projet_edit', compact('data', 'categories'));
}
public function UpdateProjet(Request $request)
{
    $id = $request->id; // Récupération de l'ID du projet à mettre à jour

    // Vérification si le projet existe
    if (!$projet = ProjetModel::find($id)) {
        return redirect()->back()->with([
            'message' => 'Projet non trouvé',
            'alert-type' => 'error'
        ]);
    }
    // ✅ 1. Validation des données
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
    $projet = ProjetModel::findOrFail($id);

     

    // mettre à jour d'autres champs...
    $projet->save();

    // ✅ 2. Traitement de l'image "imagescap"
    if ($request->hasFile('imagescap')) {
        $image = $request->file('imagescap');
        $name = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/image_cap/' . $name);
        $manager->read($image)->resize(584, 500)->toJpeg(80)->save($path);
        $projet->photo = 'upload/image_cap/' . $name;
    }

    // ✅ 3. Traitement de l'image "imagebanniere"
    if ($request->hasFile('imagebanniere')) {
        $image = $request->file('imagebanniere');
        $name = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/image_ban/' . $name);
        $manager->read($image)->resize(1028, 621)->toJpeg(80)->save($path);
        $projet->photo_banniere = 'upload/image_ban/' . $name;
    }

    // ✅ 4. Traitement de l'audio
    if ($request->hasFile('audio')) {
        $file = $request->file('audio');
        $safeName = time() . '_' . preg_replace('/[^a-zA-Z0-9_\.\-]/', '_', $file->getClientOriginalName());
        $file->move(public_path('
upload/audio'), $safeName);
        $projet->audio = 'upload/audio/' . $safeName;
    }

    // ✅ 5. Mise à jour des autres champs
    $projet->nom_service = $request->nomprojet;
    $projet->petite_desc_service = $request->courtedesc;
    $projet->long_desc_service = $request->longdescription;
    $projet->video_youtube = $request->lien;
    $projet->categorie_id = $request->categorie_id;

    // ✅ 6. Sauvegarde des modifications
    $projet->save();
    // Mettre à jour la description du service
    $description = DescriptionProjet::where('id_projet', $projet->id)->first();
    if ($description) {
        $description->description = $request->longdescription;
        $description->save();
    } else {
        // Si la description n'existe pas, on en crée une nouvelle
        $newDescription = new DescriptionProjet();
        $newDescription->id_projet = $projet->id;
        $newDescription->description = $request->longdescription;
        $newDescription->save();
    }

    // ✅ 7. Retour avec message
    return redirect()->route('section.projet')->with([
        'message' => 'Projet mis à jour avec succès',
        'alert-type' => 'success'
    ]);
}
public function DeleteProjet($id)
{
    $projet = ProjetModel::findOrFail($id);
    $projet->delete();

    // Supprimer la description associée
    DescriptionProjet::where('id_projet', $id)->delete();

    return redirect()->back()->with([
        'message' => 'Projet supprimé avec succès',
        'alert-type' => 'success'
    ]);
}
public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
    ]);

    CategorieModel::create([
        'nom' => $request->nom,
    ]);

    return redirect()->back()->with('success', 'Catégorie ajoutée avec succès !');
}

}

