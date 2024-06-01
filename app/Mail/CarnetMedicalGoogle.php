<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CarnetMedicalGoogle extends Mailable
{
    use Queueable, SerializesModels;

    public $carnetData;

    /**
     * Create a new message instance.
     */
    public function __construct($carnetData)
    {
        $this->carnetData = $carnetData;
    }

    public function build()
    {
        return $this->from("ibralejorgo@gmail.com", 'Ibra') // L'expéditeur
                    ->subject("Message via le SMTP Google") // Le sujet
                    ->view('emails.carnet.index') // La vue
                    ->with('data', $this->carnetData); // Passer les données à la vue
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Carnet Medical',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.carnet.index',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
