<?php

namespace App\Repositories;

use App\DTO\SystemUserDTOs\SystemUserChangeStatusDTO;
use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdatePasswordDTO;
use App\Models\SystemUser;

interface SystemUserRepositoryInterface
{
    public function getAll(array $filters = []): array;

    public function getAllActive(array $filters = []): array;

    public function getAllInactive(array $filters = []): array;

    public function getAllRecentlyCreated(array $filters = []): array;

    public function findOne(string $id): ?SystemUser;

    public function create(SystemUserCreateDTO $dto): SystemUser;

    public function update(string $id, SystemUserUpdateDTO $dto): SystemUser;

    public function delete(string $id): void;

    public function updatePassword(string $id, SystemUserUpdatePasswordDTO $dto): SystemUser;

    public function changeStatus(string $id, SystemUserChangeStatusDTO $dto): SystemUser;
}
