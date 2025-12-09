<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Msg;
use App\Models\Tender;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WeeklyNewsletter extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Heti adatok a db-ből',
        );
    }

    public function content(): Content
    {
         $msgs = Msg::all();
            $tenders = Tender::all();
        return new Content(
            view: 'emails.weekly-newsletter',
            with: [
                'msgs' => $msgs,
                'tenders' => $tenders,
            ],
        );
    }
}