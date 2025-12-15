<?php

namespace App\DTO\SystemUserDTOs;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;



class SystemUserUpdateDTO
{
    public ?string $name;
    public ?string $email;
    public ?SystemUserRoleEnum $role;
    public ?SystemUserStatusEnum $status;

    public function __construct(
        ?string $name = null,
        ?string $email = null,
        ?SystemUserRoleEnum $role = null,
        ?SystemUserStatusEnum $status = null,
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->status = $status;
    }

    public static function makeFromRequest(array $request): self
    {
        return new self(
            $request['name'] ?? null,
            $request['email'] ?? null,
            isset($request['role']) ? SystemUserRoleEnum::from($request['role']) : null,
            isset($request['status']) ? SystemUserStatusEnum::from($request['status']) : null,
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

        return $data;
    }
}
