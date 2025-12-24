<?php

namespace App\Mail;

use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SuccessChangePassword extends Mailable
{
    use Queueable, SerializesModels;

    protected string $userName;

    protected DateTime $changedAt;

    /**
     * Create a new message instance.
     */
    public function __construct(string $userName, DateTime $changedAt)
    {
        $this->userName = $userName;
        $this->changedAt = $changedAt;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notificação de alteração de senha',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.success_change_password',
            with: ([
                'userName' => $this->userName,
                'changedAt' => $this->changedAt,
            ]),
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
