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
        Mail::to([$dto->email, auth()->user()->email])->send(new SuccessUpdateUser($dto->name, auth()->user()->name, now()));

        return $next($dto);
    }
}
