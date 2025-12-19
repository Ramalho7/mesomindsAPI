<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;

class CustomVerifyEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('Verifique seu endereço de e-mail')
            ->greeting('Olá, '.$notifiable->name.'!')
            ->line('Clique no botão abaixo para verificar seu endereço de e-mail.')
            ->action('Verificar E-mail', $verificationUrl)
            ->line('Obrigado por usar nossa aplicação!')
            ->line('Se você não criou uma conta, nenhuma ação adicional é necessária.')
            ->salutation('Atenciosamente, equipe '.config('app.name'));
    }

    /**
     * Get the verification URL for the given notifiable.
     */
    protected function verificationUrl($notifiable)
    {
        $temporarySignedRoute = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            ['id' => $notifiable->getKey(), 'hash' => sha1($notifiable->getEmailForVerification())]
        );

        $frontendUrl = config('app.frontend_url');
        $parsedUrl = parse_url($temporarySignedRoute);

        return $frontendUrl.'/verify-email?'.http_build_query([
            'id' => $notifiable->getKey(),
            'hash' => sha1($notifiable->getEmailForVerification()),
            'expires' => $parsedUrl['query']['expires'] ?? null,
            'signature' => $parsedUrl['query']['signature'] ?? null,
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
