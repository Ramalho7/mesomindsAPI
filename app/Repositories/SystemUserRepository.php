<?php

namespace App\Repositories;

use App\Models\SystemUser;

class SystemUserRepository implements SystemUserRepositoryInterface
{
    public function __construct(
        protected SystemUser $model,
    ) {}

    public function getAll(): array
    {
        return $this->model->paginate()->toArray();
    }

    public function findOne(string $id): ?SystemUser
    {
        return $this->model->find($id);
    }

    public function create($dto): SystemUser
    {
        return $this->model->create($dto->toArray());
    }

    public function update($id, $dto): SystemUser
    {
        $user = $this->model->findOrFail($id);
        $user->update($dto->toArray());
        return $user;
    }

    public function delete(string $id): void
    {
        $user = $this->model->findOrFail($id);
        $user->delete();
    }
}
