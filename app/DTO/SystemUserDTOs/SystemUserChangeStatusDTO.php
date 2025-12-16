<?php

namespace App\DTO\SystemUserDTOs;

use Illuminate\Foundation\Http\FormRequest;

class SystemUserChangeStatusDTO
{
    public string $status;

    public string $updated_by;

    public function __construct(
        string $status,
        string $updated_by,
    ) {
        $this->status = $status;
        $this->updated_by = $updated_by;
    }

    public static function makeFromRequest(FormRequest $request, string $updated_by): self
    {
        return new self(
            $request['status'],
            $updated_by,
        );
    }

    public function toArray(): array
    {
        return [
            'status' => $this->status,
            'updated_by' => $this->updated_by,
        ];
    }
}
