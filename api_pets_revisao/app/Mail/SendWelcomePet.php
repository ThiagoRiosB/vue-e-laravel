<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendWelcomePet extends Mailable
{
    use Queueable, SerializesModels;



    public $petName;
    public $clientName;

    public function __construct($petName, $clientName)
    {
        $this->petName = $petName;
        $this->clientName = $clientName;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Boas vindas Pet Shop Laravel',
        );
    }


    public function content(): Content
    {
        return new Content(
            html: 'mails.welcomeTemplate',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('catalogo.pdf'))->as('novidades_da_loja.pdf'),
            Attachment::fromPath(public_path('gato.jpg'))
        ];
    }
}
