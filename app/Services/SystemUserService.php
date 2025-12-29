<?php

namespace App\Services;

use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdateDTO;
use App\Models\SystemUser;
use App\Pipelines\SystemUser\SystemUserCreation\SendWelcomeEmail;
use App\Pipelines\SystemUser\SystemUserCreation\SuccessCreateUserEmail;
use App\Pipelines\SystemUser\SystemUserUpdate\SendSuccessUpdateUser;
use App\Repositories\SystemUserRepositoryInterface;
use Illuminate\Support\Facades\Pipeline;

class SystemUserService
{
    public function __construct(
        protected SystemUserRepositoryInterface $repository,
    ) {}

    public function getAll(array $filters = []): array
    {
        return $this->repository->getAll($filters);
    }

    public function getAllActive(array $filters = []): array
    {
        return $this->repository->getAllActive($filters);
    }

    public function getAllInactive(array $filters = []): array
    {
        return $this->repository->getAllInactive($filters);
    }

    public function getAllRecentlyCreated(array $filters = []): array
    {
        return $this->repository->getAllRecentlyCreated($filters);
    }

    public function getAllDeleted(array $filters = []): array{
        return $this->repository->getAllDeleted($filters);
    }

    public function findOne(string $id): ?SystemUser
    {
        return $this->repository->findOne($id);
    }

    public function create(SystemUserCreateDTO $dto, bool $isSelfRegister = false): SystemUser
    {

        if ($isSelfRegister) {
            return $this->selfRegisterCreate($dto);
        }

        $user = Pipeline::send($dto)
            ->withinTransaction()
            ->through([
                SuccessCreateUserEmail::class,
            ])
            ->thenReturn();

        return $this->repository->create($user);
    }

    private function selfRegisterCreate(SystemUserCreateDTO $dto): SystemUser
    {

        $user = Pipeline::send($dto)
            ->withinTransaction()
            ->through([
                SendWelcomeEmail::class,
            ])
            ->thenReturn();

        return $this->repository->create($user);
    }

    public function update(string $id, SystemUserUpdateDTO $dto): SystemUser
    {

        $user = Pipeline::send($dto)
            ->withinTransaction()
            ->through([
                SendSuccessUpdateUser::class,
            ])
            ->thenReturn();

        $user = $this->repository->update($id, $dto);

        return $user->fresh();
    }

    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }

    public function changeStatus(string $id, $dto): SystemUser
    {
        return $this->repository->changeStatus($id, $dto);
    }
}
