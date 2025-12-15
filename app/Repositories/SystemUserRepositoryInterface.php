<?php

namespace App\Repositories;

use App\Models\SystemUser;

interface SystemUserRepositoryInterface
{
    public function getAll(): array;

    public function findOne(string $id): ?SystemUser;

    public function create($dto): SystemUser;

    public function update($id, $dto): SystemUser;

    public function delete(string $id): void;
}
