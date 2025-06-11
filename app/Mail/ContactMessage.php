<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $viewTemplate;

    public function __construct(public string $subjectLine, array $data, string $viewTemplate = 'emails.contact')
    {
        $this->data = $data;
        $this->viewTemplate = $viewTemplate;
    }

    public function build()
    {
        return $this->subject($this->subjectLine)
                    ->markdown($this->viewTemplate)
                    ->with('data', $this->data);
    }
}

