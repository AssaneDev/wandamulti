<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\websitemail;
use App\Models\Admin;


class AdminController extends Controller
{
    public function AdminLogin(){
        return view('admin.login');
    }
    // End Methode

    public function AdminDashboard(){
        return view('admin.index');
    }
    // End Methode

    public function AdminLoginSubmit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password'=> $check['password']
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin.dashboard')->with('success','Connecter avec suceess');
            
        }else{
            return redirect()->route('admin.login')->with('error','Invalide email ou mot de pass');

        }
    }

    // End Methode
    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','Déconnecter avec success');
    }
    //End Methode

    public function AdminForgetPassword(){
        return view('admin.forget_password');
    }
    //End Methode
    public function AdminPasswordSubmit(Request $request){
        $request->validate([
            'email' => 'required|email'
         ]);

         $admin_data = Admin::where('email',$request->email)->first();

         if (!$admin_data) {
            return redirect()->back()->with('error','Email incorrect');
         }

         $token = hash('sha256',time());
         $admin_data->token = $token;
         $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = "Reset Password";
        $message = "Clicker sur ce liens pour modifier le mot de passe <br>";
        $message .= "<a href='" .$reset_link. "' >Cliquer Ici</a>";

        \Mail::to($request->email)->send(new websitemail($subject,$message));

        return redirect()->back()->with('success','Un liens de vous a ete envoyez à votre email');
    }
    public function AdminResetPassword($token,$email){

        $admin_data = Admin::where('email',$email)->where('token',$token)->first();

        if (!$admin_data) {
            return redirect()->route('admin.login')->with('error','Token ou Email invalide');
        }
        return view('admin.reset_password',compact('token','email'));

    }
    public function AdminResetPasswordSubmit(Request $request){
        $request->validate([
            'password'=>'required',
            'password_confirmation'=> 'required|same:password',
        ]);
        
        $admin_data = Admin::where('email',$request->email)->where('token',$request->token)->first();

        $admin_data->password = hash::make($request->password);
        $admin_data->token = "";
        $admin_data->update();

        return redirect()->route('admin.login')->with('success','mot de passe changer avec succés');


    }



    //End Methode

    public function AdminProfile(){
      $id = Auth::guard('admin')->id();
      $profileData = Admin::find($id);
      return view('admin.admin_profile',compact('profileData'));
    }

     //End Methode

     public function AdminProfileStore(Request $request){
        $id = Auth::guard('admin')->id();
        $data = Admin::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $oldPhotoPath = $data->photo;
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/admin_images'),$filename);
            $data->photo = $filename;

            if ($oldPhotoPath && $oldPhotoPath !== $filename ) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }
        $data->save();
        $notification = array(
            'message' => 'Profile Mise à jour avec success',
            'alert-type'=> 'success'
        );
        return redirect()->back()->with($notification);
     }
     // End Methode
     private function deleteOldImage(string  $oldPhotoPath): void{
        $fullPath = public_path('upload/admin_images/'.$oldPhotoPath);

        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
     }
     //End private methode

     public function adminChangePassword(){
        $id = Auth::guard('admin')->id();
        $profileData = Admin::find($id);
        return view('admin.admin_change_password',compact('profileData'));
      }
  
       //End Methode

       public function AdminPasswordUpdate(Request $request){

        $admin = Auth::guard('admin')->user();
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|confirmed'
            ]
            );

            if(!Hash::check($request->old_password,$admin->password)){
                $notification = array(
                    'message' => 'Ancien mot de passe ne corresponds pas',
                    'alert-type'=> 'error'
                );
                return back()->with($notification);
            }

            /// Mise a jour du nouveau mot de pass
            Admin::whereId($admin->id)->update([
                'password' => Hash::make($request->new_password)
            ]);

            $notification = array(
                'message' => 'Mot de passe changer avec success',
                'alert-type'=> 'success'
            );
            return back()->with($notification);

       }
}
