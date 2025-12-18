<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SuccessCreateUser extends Mailable
{
    use Queueable, SerializesModels;

    protected string $newUserName;

    protected string $creatorName;

    /**
     * Create a new message instance.
     */
    public function __construct(string $newUserName, string $creatorName)
    {
        $this->newUserName = $newUserName;
        $this->creatorName = $creatorName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Usuário criado com sucesso',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.success_create_user',
            with: ['newUserName' => $this->newUserName, 'creatorName' => $this->creatorName]
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
