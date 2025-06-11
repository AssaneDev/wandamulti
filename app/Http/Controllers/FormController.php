<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Http;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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

    $this->sendTelegramNotifications($data, 'classic');

    
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

    Mail::to('adiop6225@gmail.com')->send(new ContactMessage($subject, $data, 'emails.contact_page'));
    Mail::to($data['email'])->send(new ContactMessage(
        'Votre message a bien été envoyé',
        $data,
        'emails.confirmation_client'
    ));

    $this->sendTelegramNotifications($data, 'page');

    //  return response()->json(['status' => 'ok']);
     return redirect()->back()->with('success', 'Votre message a bien été envoyé.');
}


private function sendTelegramNotifications($data, $type = 'classic')
{
    $token = env('TELEGRAM_BOT_TOKEN');
    $chatId = env('TELEGRAM_CHAT_ID');

    if ($type === 'classic') {
        $message = "📩 <b>Nouveau message classique</b>\n"
            . "<b>Nom :</b> {$data['name']}\n"
            . "<b>Email :</b> {$data['email']}\n"
            . "<b>Téléphone :</b> {$data['phone']}\n"
            . "<b>Projet :</b> {$data['projet']}\n"
            . "<b>Message :</b>\n{$data['message']}";
    } else {
        $message = "📬 <b>Nouveau message page Contact</b>\n"
            . "<b>Nom :</b> {$data['fname']} {$data['lname']}\n"
            . "<b>Email :</b> {$data['email']}\n"
            . "<b>Téléphone :</b> {$data['phone']}\n"
            . "<b>Message :</b>\n{$data['message']}";
    }

    Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML',
    ]);
}


}






