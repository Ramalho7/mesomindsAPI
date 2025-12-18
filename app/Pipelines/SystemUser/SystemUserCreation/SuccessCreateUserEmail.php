<?php
namespace App\Pipelines\SystemUser\SystemUserCreation;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\Mail\SuccessCreateUser;
use Closure;
use Illuminate\Support\Facades\Mail;

class SuccessCreateUserEmail
{
    public function handle(SystemUserCreateDTO $dto, Closure $next)
    {
        Mail::to([$dto->email, auth()->user()->email])->send(new SuccessCreateUser($dto->name, auth()->user()->name));

        return $next($dto);
    }
}
