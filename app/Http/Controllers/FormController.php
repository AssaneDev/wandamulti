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
    'name' => 'required|string|min:2|max:60|regex:/^[\pL\s\-]+$/u',
    'email' => 'required|email|max:100',
    'phone' => 'required|string|min:6|max:25|regex:/^[\d\s\+\-\(\)]+$/',
    'projet' => 'required|string|min:3|max:100',
    'message' => 'required|string|min:10|max:1000',
    'g-recaptcha-response' => 'required',
]);
    
    if ($request->filled('website')) {
    return response()->json([
        'status' => 'error',
        'message' => 'Bot détecté (champ caché rempli)'
    ]);
}


        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (! $response->json('success')) {
            return back()->withErrors(['captcha' => 'Échec de la vérification reCAPTCHA.'])->withInput();
}
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
   $request->validate([
    'fname' => 'required|string|min:2|max:50',
    'lname' => 'required|string|min:2|max:50',
    'email' => 'required|email|max:100',
    'phone' => 'required|string|regex:/^[\d\s\+\-\(\)]+$/',
    'message' => 'required|string|min:10|max:1000',
    'g-recaptcha-response' => 'required',
]);


    if ($request->filled('website')) {
    return response()->json([
        'status' => 'error',
        'message' => 'Bot détecté (champ caché rempli)'
    ]);
}

    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    if (! $response->json('success')) {
        return response()->json([
            'status' => 'error',
            'message' => 'Vérification reCAPTCHA échouée.'
        ]);
    }

    $data = $request->only('fname', 'lname', 'email', 'phone', 'message');
    $fullname = "{$data['fname']} {$data['lname']}";

    ContactMessageLog::create([
        'name' => $fullname,
        'email' => $data['email'],
        'phone' => $data['phone'],
        'message' => $data['message'],
        'source' => 'page',
    ]);
// costantiniwanda
    // Envoi de mail
    Mail::to('adiop6225@gmail.com')->send(new ContactMessage("Nouveau message de $fullname", $data, 'emails.contact_page'));
     Mail::to($data['email'])->send(new ContactMessage(
        'Votre message a bien été envoyé',
         $data,
       'emails.confirmation_client'
    ));

    return response()->json(['status' => 'ok']);
}

}






