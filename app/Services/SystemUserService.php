<?php

namespace App\Services;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdateDTO;
use App\Models\SystemUser;
use App\Repositories\SystemUserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class SystemUserService
{
    public function __construct(
        protected SystemUserRepositoryInterface $repository,
    ) {}

    public function getAll(): array
    {
        return $this->repository->getAll();
    }

    public function findOne(string $id): ?SystemUser
    {
        return $this->repository->findOne($id);
    }

    public function create(SystemUserCreateDTO $dto, ?string $createdBy = null): SystemUser
    {
        if ($dto->password) {
            $dto->password = Hash::make($dto->password);
        }

        if ($createdBy) {
            $dto->created_by = $createdBy;
        }

        return $this->repository->create($dto);
    }

    public function update(string $id, SystemUserUpdateDTO $dto, ?string $updatedBy = null): SystemUser
    {
        $data = $dto->toArray();

        if ($updatedBy) {
            $data['updated_by'] = $updatedBy;
        }

        $user = $this->repository->findOne($id);
        if (!$user) {
            throw new \Exception('Usuário não encontrado');
        }

        $user->update($data);
        return $user->fresh();
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }

    public function findByEmail(string $email): ?SystemUser
    {
        return SystemUser::where('email', $email)->first();
    }
}
