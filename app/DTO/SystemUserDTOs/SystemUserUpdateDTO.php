<?php

namespace App\DTO\SystemUserDTOs;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;

class SystemUserUpdateDTO
{
    public ?string $name;

    public ?string $email;

    public ?SystemUserRoleEnum $role;

    public string $updated_by;

    public function __construct(
        ?string $name,
        ?string $email,
        ?SystemUserRoleEnum $role,
        string $updated_by,
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->updated_by = $updated_by;
    }

    public static function makeFromRequest(FormRequest $request, ?string $updated_by = null): self
    {
        return new self(
            $request['name'] ?? null,
            $request['email'] ?? null,
            isset($request['role']) ? SystemUserRoleEnum::from($request['role']) : null,
            $updated_by,
        );
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->name !== null) {
            $data['name'] = $this->name;
        }
        if ($this->email !== null) {
            $data['email'] = $this->email;
        }
        if ($this->role !== null) {
            $data['role'] = $this->role->value;
        }

        if ($this->updated_by !== null) {
            $data['updated_by'] = $this->updated_by;
        }

        return $data;
    }
}
