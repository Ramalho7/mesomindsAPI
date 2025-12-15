<?php

namespace App\DTO\SystemUserDTOs;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;

class SystemUserCreateDTO
{
    public string $name;

    public string $email;

    public SystemUserRoleEnum $role;

    public SystemUserStatusEnum $status;

    public ?string $password = null;

    public ?string $created_by = null;

    public function __construct(
        string $name,
        string $email,
        SystemUserRoleEnum $role,
        SystemUserStatusEnum $status,
        ?string $password = null,
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->status = $status;
        $this->password = $password;
    }

    public static function makeFromRequest(array $request): self
    {
        return new self(
            $request['name'],
            $request['email'],
            SystemUserRoleEnum::from($request['role']),
            SystemUserStatusEnum::from($request['status']),
            $request['password'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->role->value,
            'status' => $this->status->value,
        ];

        if ($this->password) {
            $data['password'] = $this->password;
        }

        if ($this->created_by) {
            $data['created_by'] = $this->created_by;
        }

        return $data;
    }
}
