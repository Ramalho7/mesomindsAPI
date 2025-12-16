<?php

namespace App\DTO\SystemUserDTOs;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use Illuminate\Foundation\Http\FormRequest;

class SystemUserUpdateDTO
{
    public ?string $name;

    public ?string $email;

    public ?SystemUserRoleEnum $role;

    public ?SystemUserStatusEnum $status;

    public string $updated_by;

    public function __construct(
        ?string $name,
        ?string $email,
        ?SystemUserRoleEnum $role,
        ?SystemUserStatusEnum $status,
        string $updated_by,
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->status = $status;
        $this->updated_by = $updated_by;
    }

    public static function makeFromRequest(FormRequest $request, ?string $updated_by = null): self
    {
        return new self(
            $request['name'] ?? null,
            $request['email'] ?? null,
            isset($request['role']) ? SystemUserRoleEnum::from($request['role']) : null,
            isset($request['status']) ? SystemUserStatusEnum::from($request['status']) : null,
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
        if ($this->status !== null) {
            $data['status'] = $this->status->value;
        }

        if ($this->updated_by !== null) {
            $data['updated_by'] = $this->updated_by;
        }

        return $data;
    }
}
