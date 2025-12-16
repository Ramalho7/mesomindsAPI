<?php

namespace App\DTO\SystemUserDTOs;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class SystemUserUpdatePasswordDTO
{
    public string $password;

    public string $updated_by;

    public function __construct(
        string $password,
        string $updated_by,
    ) {
        $this->password = $password;
        $this->updated_by = $updated_by;
    }

    public static function makeFromRequest(FormRequest $request, string $updated_by): self
    {
        return new self(
            $request['password'],
            $updated_by,
        );
    }

    public function toArray(): array
    {
        $data = [
            'password' => Hash::make($this->password),
        ];

        if ($this->updated_by !== null) {
            $data['updated_by'] = $this->updated_by;
        }

        return $data;
    }
}
