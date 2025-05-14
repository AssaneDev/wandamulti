<?php

namespace App\Http\Controllers\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionModel;
use App\Models\SectionModel2;
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
    
        $oldPhotoPath = $sectionun->photo;
    
        if ($request->hasFile('imagesecun')) {
            $image = $request->file('imagesecun');
    
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    
            $img = $manager->read($image)->resize(436, 640)->toJpeg(80);
            $img->save(public_path('upload/image_sec1/' . $name_gen));

            
    
            // Enregistre le nouveau nom dans la DB
            $sectionun->photo = $name_gen;
    
            // Supprime l'ancienne image si nécessaire
            if ($oldPhotoPath && $oldPhotoPath !== $name_gen) {
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
        private function deleteOldImage(string  $oldPhotoPath): void{
            $fullPath = public_path('upload/image_sec1/'.$oldPhotoPath);
    
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
            
            $sectiondeux = SectionModel2::find(1);
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
          SectionModel2::insert([
            'nom_service'=>$request->nomservice,
            'petite_desc_service'=>$request->courtedesc,
            'long_desc_service'=>$request->longdescription,
        

          ]);
          // Notification de succès
            return redirect()->back()->with([
                'message' => 'Service ajouter avec success',
                'alert-type' => 'success'
            ]);
        
        } 

        //End Methode

         public function DeleteService($id) {
        $item = SectionModel2::findOrFail($id);
        $img = $item->image_cap;
      
        SectionModel2::findOrFail($id)->delete();
     
        $notification = array(
            'message' =>'Services Supprimer avec succes',
            'alert-type' => 'success'
        );
        
        return  redirect()->back()->with($notification);
    } 

         


}
