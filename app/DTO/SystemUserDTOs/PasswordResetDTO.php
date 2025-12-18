<?php

namespace App\DTO\SystemUserDTOs;

final class PasswordResetDTO
{
    public function __construct(
        public string $token,
        public string $email,
        public string $password,
        public ?string $password_confirmation = null,
    ) {}
}
