<?php
namespace App\Pipelines\SystemUser\SystemUserCreation;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use Closure;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    public function handle(SystemUserCreateDTO $dto, Closure $next)
    {
        Mail::to($dto->email)->send(new WelcomeEmail($dto->name));

        return $next($dto);
    }
}
