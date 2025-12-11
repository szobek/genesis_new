<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Database\Eloquent\Collection; 

class WeeklyNewsletter extends Mailable
{
    use Queueable, SerializesModels;

    public Collection $msgs;
    public Collection $tenders;

    /**
     * Create a new message instance.
     */
    public function __construct(Collection $msgs, Collection $tenders)
    {
        $this->msgs = $msgs;
        $this->tenders = $tenders;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Heti Jelentés: Kapcsolatfelvételek és Árajánlatkérések',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.weekdata',
            // Az adatokat a 'with' metódussal is átadhatod, ez a legtisztább
            with: [
                'msgs' => $this->msgs,
                'tenders' => $this->tenders,
            ],
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