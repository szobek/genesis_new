<?php

namespace App\Mail;

use App\Models\Tender;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TenderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Árajánlat kérés az oldalon',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
       $tender=Tender::latest()->first();
        return new Content(
            view: 'mail.tender',
            with:[
                'sender'=>$tender->name??"",
                'email'=>$tender->email??'',
                'phone'=>$tender->phone??'',
                'address'=>$tender->address??"",
                'hasGround'=>$tender->hasGround ? __("tender.".$tender->hasGround) : "",
                'ideaType' => __('tender.' . $tender->ideaType) ?? $tender->ideaType,
                'area'=>$tender->area??"",
                'hasBlueprint'=>$tender->hasBlueprint ? __("tender.".$tender->hasBlueprint ) : "",
                'hasFoundation'=>$tender->hasFoundation ? __("tender.".$tender->hasFoundation) : "",
            ]
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
