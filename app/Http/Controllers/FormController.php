<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Http;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

    $subject = "Nouveau message de {$data['name']} (depuis formulaire classique)";

    Mail::to('adiop6225@gmail.com')->send(new ContactMessage($subject, $data, 'contact'));
    $this->sendTelegramNotifications($data, 'classic');

    return back()->with('success', 'Message envoyé avec succès.');
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

    $subject = "Nouveau message de {$data['fname']} {$data['lname']} (depuis page contact)";

    Mail::to('adiop6225@gmail.com')->send(new ContactMessage($subject, $data, 'contact_page'));
    $this->sendTelegramNotifications($data, 'page');

    return back()->with('success', 'Message envoyé avec succès.');
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






