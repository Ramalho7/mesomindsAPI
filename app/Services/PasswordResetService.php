<?php

namespace App\Services;

use App\DTO\SystemUserDTOs\PasswordResetDTO;
use App\Pipelines\SystemUser\SystemUserUpdate\SendSuccessUpdatePassword;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordResetService
{
    protected string $broker = 'system_users';

    public function sendResetLink(string $email): string
    {
        return Password::broker($this->broker)->sendResetLink(['email' => $email]);
    }

    public function reset(PasswordResetDTO $dto): string
    {
        $status = Password::broker($this->broker)->reset(
            [
                'email' => $dto->email,
                'password' => $dto->password,
                'password_confirmation' => $dto->password_confirmation,
                'token' => $dto->token,
            ],
            function ($user, $password) use ($dto) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));

                app(Pipeline::class)
                    ->send($dto)
                    ->through([
                        SendSuccessUpdatePassword::class,
                    ])
                    ->thenReturn();
            }
        );

        return $status;
    }
}
