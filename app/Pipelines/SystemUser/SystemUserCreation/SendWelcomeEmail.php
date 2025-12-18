<?php

namespace App\Pipelines\SystemUser\SystemUserCreation;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\Mail\WelcomeEmail;
use Closure;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    public function handle(SystemUserCreateDTO $dto, Closure $next)
    {
        Mail::to($dto->email)->send(new WelcomeEmail($dto->name));

        return $next($dto);
    }
}
