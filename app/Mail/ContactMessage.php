<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectLine;
    public $data;
    public $viewTemplate;

    public function __construct($subjectLine, $data, $viewTemplate = 'contact')
    {
        $this->subjectLine = $subjectLine;
        $this->data = $data;
        $this->viewTemplate = $viewTemplate;
    }

    public function build()
    {
        return $this->subject($this->subjectLine)
                    ->view($this->viewTemplate)
                    ->with('data', $this->data);
    }
}
