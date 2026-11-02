<?php

namespace App\Mail;

use App\Models\ContactRequest;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class NewContactRequest extends Mailable
{
    public function __construct(public ContactRequest $contactRequest)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nowe zgłoszenie: ' . $this->contactRequest->topicLabel() . ' (' . $this->contactRequest->name . ')',
            replyTo: [new Address($this->contactRequest->email, $this->contactRequest->name)],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.new-contact-request');
    }
}
