<?php

namespace App\Pipelines\SystemUser\SystemUserUpdate;

use App\DTO\SystemUserDTOs\SystemUserUpdateDTO;
use App\Mail\SuccessUpdateUser;
use Closure;
use Illuminate\Support\Facades\Mail;

class SendSuccessUpdateUser
{
    public function handle(SystemUserUpdateDTO $dto, Closure $next)
    {
        \Log::info('Enviando e-mail de atualização', [
            'email' => $dto->email,
            'name' => $dto->name,
        ]);

        try {
            Mail::to($dto->email)->send(
                new SuccessUpdateUser(
                    UserName: $dto->name,
                    creatorName: 'Sistema', // ou busque o nome do criador
                    updatedAt: now()
                )
            );

            \Log::info('E-mail enviado com sucesso');
        } catch (\Exception $e) {
            \Log::error('Erro ao enviar e-mail', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }

        return $next($dto);
    }
}
