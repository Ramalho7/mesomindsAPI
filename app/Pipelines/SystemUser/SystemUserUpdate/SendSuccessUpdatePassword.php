<?php

namespace App\Pipelines\SystemUser\SystemUserUpdate;

use App\DTO\SystemUserDTOs\PasswordResetDTO;
use App\Mail\SuccessChangePassword;
use Closure;
use Illuminate\Support\Facades\Mail;

class SendSuccessUpdatePassword
{
    public function handle(PasswordResetDTO $dto, Closure $next)
    {
        try {
            Mail::to($dto->email)->send(
                new SuccessChangePassword(
                    $dto->email,
                    now()
                )
            );

        } catch (\Exception $e) {
            \Log::error('Erro ao enviar e-mail', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }

        return $next($dto);
    }
}
