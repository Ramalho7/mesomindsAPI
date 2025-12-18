<?php

namespace App\Pipelines\SystemUser\SystemUserCreation;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use Closure;

class ValidateRegisterByAdmin
{
    public function handle($dto, Closure $next)
    {

        $allowedRoles = [
            SystemUserRoleEnum::ADMIN,
            SystemUserRoleEnum::MODERATOR,
            SystemUserRoleEnum::OPERATOR,
        ];

        if (in_array($dto->role, $allowedRoles) === false) {
            throw new \Exception('Não é possível seguir com a criação do usuário. Usuário de tipos inválidos.');
        }

        return $next($dto);
    }
}
