<?php

namespace App\Pipelines\SystemUser\SystemUserCreation;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use Closure;

class ValidateSelfRegisterRoles
{
    public function handle(SystemUserCreateDTO $dto, Closure $next)
    {
        $restrictedRoles = [
            SystemUserRoleEnum::ADMIN,
            SystemUserRoleEnum::MODERATOR,
            SystemUserRoleEnum::OPERATOR,
        ];

        if (in_array($dto->role, $restrictedRoles)) {
            throw new \Exception('Não é possível seguir com a criação do usuário. Usuário de tipos inválidos.');
        }

        return $next($dto);
    }
}
