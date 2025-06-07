<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatGptController extends Controller
{
    //
    public function PromptInterface()
    {
        return view('admin.chatgpt.prompt');
    }

   

  public function prompt(Request $request)
{
    $prompt = $request->input('prompt');
    $mode = $request->input('mode'); // 'copywriting' ou 'normal'
    $styleName = $request->input('style'); // ex: 'commercial_instagram', 'discours_mariage', etc.

    if ($mode === 'copywriting') {
        // Chemin vers le fichier de style selon le style choisi
        $stylePath = storage_path("app/public/backend/assets/styles/{$styleName}.txt");

        if (file_exists($stylePath)) {
            $style = file_get_contents($stylePath);
        } else {
            // Style par défaut si fichier introuvable
            $style = "Tu es un assistant d'écriture créatif qui adapte son ton en fonction du contexte.";
        }

        $messages = [
            ['role' => 'system', 'content' => $style],
            ['role' => 'user', 'content' => $prompt],
        ];
    } else {
        $messages = [
            ['role' => 'user', 'content' => $prompt],
        ];
    }

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . config('services.openai.api_key'),
        'Content-Type' => 'application/json',
    ])->post('https://api.openai.com/v1/chat/completions', [
        'model' => 'gpt-4o-mini',
        'messages' => $messages,
    ]);

    $data = $response->json();

    if (isset($data['choices'][0]['message']['content'])) {
        return response()->json([
            'reply' => $data['choices'][0]['message']['content']
        ]);
    } elseif (isset($data['error'])) {
        return response()->json([
            'reply' => 'Erreur API : ' . $data['error']['message']
        ], 500);
    } else {
        return response()->json([
            'reply' => 'Réponse inattendue d’OpenAI.'
        ], 500);
    }
}

}