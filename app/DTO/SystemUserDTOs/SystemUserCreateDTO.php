<?php

namespace App\DTO\SystemUserDTOs;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use Hash;
use Illuminate\Foundation\Http\FormRequest;

class SystemUserCreateDTO
{
    public string $name;

    public string $email;

    public SystemUserRoleEnum $role;

    public SystemUserStatusEnum $status;

    public string $password;

    public ?string $created_by;

    public ?string $updated_by;

    public function __construct(
        string $name,
        string $email,
        SystemUserRoleEnum $role,
        SystemUserStatusEnum $status,
        string $password,
        ?string $created_by,
        ?string $updated_by,
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->status = $status;
        $this->password = $password;
        $this->created_by = $created_by;
        $this->updated_by = $updated_by;
    }

    public static function makeFromRequest(FormRequest $request, ?string $created_by = null, ?string $updated_by = null): self
    {
        return new self(
            $request['name'],
            $request['email'],
            SystemUserRoleEnum::from($request['role']),
            SystemUserStatusEnum::from($request['status'] ?? SystemUserStatusEnum::ACTIVE->value),
            $request['password'] ? Hash::needsRehash($request['password']) ? Hash::make($request['password']) : $request['password'] : null,
            $created_by,
            $updated_by,
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

        if ($this->updated_by) {
            $data['updated_by'] = $this->updated_by;
        }

        return $data;
    }
}
