<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionModel;
use App\Models\SectionModel2;
use App\Models\DescriptionService;
use Hamcrest\Description;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;



class SectionController extends Controller
{
    //
    public function SectionUn()
    {
        $dataSection1 = SectionModel::find(1);
        return view('admin.sections.section_1',compact('dataSection1'));
    }

    public function SectionUnUpdate(Request $request)
    {
        $id = $request->id;
        $sectionun = SectionModel::find($id);
        $sectionun->titre1 = $request->titre1;
        $sectionun->titre2 = $request->titre2;
        $sectionun->description = $request->description;
        $sectionun->lien_whatsapp = $request->lien_whatsapp;
        $sectionun->lien_facebook = $request->lien_facebook;
        $sectionun->lien_linkedin = $request->lien_linkedin;
    
        $oldPhotoPath = $sectionun->photo;
    
        if ($request->hasFile('imagesecun')) {
            $image = $request->file('imagesecun');
    
            $manager = new ImageManager(new Driver());
           

        $image = $request->file('imagesecun');
        $name = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/image_sec1/' . $name);
        $manager->read($image)->resize(436,640)->toJpeg(80)->save($path);
       
    
            // Enregistre le nouveau nom dans la DB
           
             $sectionun->photo = 'upload/image_sec1/' . $name;
            // Supprime l'ancienne image si nécessaire
           if ($oldPhotoPath && $oldPhotoPath !== $sectionun->photo) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }
    
        $sectionun->save();
    
        $notification = [
            'message' => 'Section 1 Mise à jour avec succès',
            'alert-type' => 'success'
        ];
    
        return redirect()->back()->with($notification);
    }
        //End Methode

         //Start private methode
         /**
          * Delete the old image file from the server.
          *
          * @param string $oldPhotoPath The path of the old photo to delete.
          * @return void
          */
        private function deleteOldImage(string $oldPhotoPath): void {
            $fullPath = public_path($oldPhotoPath); // Ne pas préfixer deux fois le chemin

            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
        }
         //End private methode

         public function SectionDeux()
         {
            $dataSection2 = SectionModel2::find(1);
             $datall = SectionModel2::all();
            return view('admin.sections.section_2',compact('dataSection2','datall'));
         }

         //End Methode

         public function SectionDeuxCreate(){
            $dataSection2 = SectionModel2::find(1);
            
            return view('admin.sections.section_2_create',compact('dataSection2'));
           
          
         }

         //End Methode

         public function SectionDeuxUpdate(Request $request)
         {
            $id = $request->id;  
            $sectiondeux = SectionModel2::find($id);
            $sectiondeux->titre_section = $request->titresec2;
            $sectiondeux->desc_section = $request->dec_section2;
          

       
            // Enregistre les modifications
            $sectiondeux->save();
    
            // Notification de succès
            return redirect()->back()->with([
                'message' => 'Section 2 Mise à jour avec succès',
                'alert-type' => 'success'
            ]);
         }

         //End Methode

         public function SectionDeuxStore(Request $request){
          $id_description = SectionModel2::insertGetId([
            'nom_service'=>$request->nomservice,
            'petite_desc_service'=>$request->courtedesc,
            'long_desc_service'=>$request->longdescription,
        

          ]);
            $description_service = new DescriptionService();
            $description_service->id_service = $id_description;
            $description_service->description = $request->longdescription;
            $description_service->save();
          // Notification de succès
            return redirect()->route('section_2')->with([
                'message' => 'Service ajouter avec success',
                'alert-type' => 'success'
            ]);
        
        } 

        //End Methode

         public function DeleteService($id) {
        $item = SectionModel2::findOrFail($id);
        $img = $item->image_cap;
        $description_service = DescriptionService::where('id_service', $id)->first();
        if ($description_service) {
            $description_service->delete();
        }
      
        SectionModel2::findOrFail($id)->delete();
     
        $notification = array(
            'message' =>'Services Supprimer avec succes',
            'alert-type' => 'success'
        );
        
        return  redirect()->back()->with($notification);
    } 

    public function EditService($id) {
        $item = SectionModel2::findOrFail($id);
        $description_service = DescriptionService::where('id_service', $id)->first();
        return view('admin.sections.edit_service', compact('item', 'description_service'));
    }
    public function UpdateService(Request $request) {
        $id= $request->id;
        $item = SectionModel2::findOrFail($id);
        $item->nom_service = $request->nomservice;
        $item->petite_desc_service = $request->petitedescservice;
        $item->long_desc_service = $request->longdescservice;
        $item->save();

        // Mettre à jour la description du service
        $description_service = DescriptionService::where('id_service', $id)->first();
        if ($description_service) {
            $description_service->description = $request->longdescservice;
            $description_service->save();
        }

        return redirect()->route('section_2')->with([
            'message' => 'Service mis à jour avec succès',
            'alert-type' => 'success'
        ]);
    }

         


}
