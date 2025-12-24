<?php

namespace App\Mail;

use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SuccessUpdateUser extends Mailable
{
    use Queueable, SerializesModels;

    protected string $UserName;

    protected string $creatorName;

    protected DateTime $updatedAt;

    /**
     * Create a new message instance.
     */
    public function __construct(string $UserName, string $creatorName, DateTime $updatedAt)
    {
        $this->UserName = $UserName;
        $this->creatorName = $creatorName;
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notificação de atualização de conta',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.success_update_user',
            with: [
                'UserName' => $this->UserName,
                'creatorName' => $this->creatorName,
                'updatedAt' => $this->updatedAt,
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
