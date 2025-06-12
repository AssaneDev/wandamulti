<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Http;

use App\Models\ContactMessageLog;


class FormController extends Controller
{
    
public function send(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'projet' => 'required|string',
        'message' => 'required|string',
    ]);

    // Enregistrement dans la base
    ContactMessageLog::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'projet' => $data['projet'],
        'message' => $data['message'],
        'source' => 'classic',
    ]);

    $subject = "Nouveau message de {$data['name']} (depuis formulaire classique)";

    Mail::to('costantiniwanda@gmail.com')->send(new ContactMessage($subject, $data));
    Mail::to($data['email'])->send(new ContactMessage(
        'Votre message a bien été envoyé',
        $data,
        'emails.confirmation_client'
    ));

   

    
    return response()->json(['status' => 'ok']);
}

public function Contact(Request $request)
{
    $data = $request->validate([
        'fname' => 'required|string',
        'lname' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'message' => 'required|string',
    ]);

    $fullname = "{$data['fname']} {$data['lname']}";

    ContactMessageLog::create([
        'name' => $fullname,
        'email' => $data['email'],
        'phone' => $data['phone'],
        'message' => $data['message'],
        'source' => 'page',
    ]);

    $subject = "Nouveau message de {$fullname} (depuis page contact)";

    Mail::to('costantiniwanda@gmail.com')->send(new ContactMessage($subject, $data, 'emails.contact_page'));
    Mail::to($data['email'])->send(new ContactMessage(
        'Votre message a bien été envoyé',
        $data,
        'emails.confirmation_client'
    ));

   

     return response()->json(['status' => 'ok']);
   
}




}






