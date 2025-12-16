<?php

namespace App\Services;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdatePasswordDTO;
use App\Models\SystemUser;
use App\Repositories\SystemUserRepositoryInterface;

class SystemUserService
{
    public function __construct(
        protected SystemUserRepositoryInterface $repository,
    ) {}

    public function getAll(array $filters = []): array
    {
        return $this->repository->getAll($filters);
    }

    public function findOne(string $id): ?SystemUser
    {
        return $this->repository->findOne($id);
    }

    public function create(SystemUserCreateDTO $dto): SystemUser
    {
        return $this->repository->create($dto);
    }

    public function update(string $id, SystemUserUpdateDTO $dto): SystemUser
    {
        $user = $this->repository->update($id, $dto);

        return $user->fresh();
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }

    public function updatePassword(string $id, SystemUserUpdatePasswordDTO $dto): SystemUser
    {
        return $this->repository->updatePassword($id, $dto);
    }

    public function changeStatus(string $id, $dto): SystemUser
    {
        return $this->repository->changeStatus($id, $dto);
    }
}
