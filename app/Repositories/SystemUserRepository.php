<?php

namespace App\Repositories;

use App\DTO\SystemUserDTOs\SystemUserChangeStatusDTO;
use App\DTO\SystemUserDTOs\SystemUserCreateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdateDTO;
use App\DTO\SystemUserDTOs\SystemUserUpdatePasswordDTO;
use App\Models\ActiveSystemUser;
use App\Models\DelectedSystemUser;
use App\Models\InactiveSystemUser;
use App\Models\RecentlyCreatedSystemUser;
use App\Models\SystemUser;

class SystemUserRepository implements SystemUserRepositoryInterface
{
    public function __construct(
        protected SystemUser $model,
    ) {}

    public function getAll(array $filters = []): array
    {
        $query = $this->model->query();

        foreach ($filters as $key => $value) {
            if (method_exists($this->model, 'scope'.ucfirst($key)) && ! is_null($value)) {
                $query->{$key}($value);
            }
        }

        return $query->with(['creator', 'updater'])->paginate()->toArray();
    }

    public function getAllActive(array $filters = []): array
    {
        $query = ActiveSystemUser::query();

        foreach ($filters as $key => $value) {
            if (method_exists($this->model, 'scope'.ucfirst($key)) && ! is_null($value)) {
                $query->{$key}($value);
            }
        }

        return $query->with(['creator', 'updater'])->paginate()->toArray();
    }

    public function getAllInactive(array $filters = []): array
    {
        $query = InactiveSystemUser::query();

        foreach ($filters as $key => $value) {
            if (method_exists($this->model, 'scope'.ucfirst($key)) && ! is_null($value)) {
                $query->{$key}($value);
            }
        }

        return $query->with(['creator', 'updater'])->paginate()->toArray();
    }

    public function getAllRecentlyCreated(array $filters = []): array
    {
        $query = RecentlyCreatedSystemUser::query();

        foreach ($filters as $key => $value) {

            if ($key === 'recently_created') {
                continue;
            }

            if (method_exists($this->model, 'scope'.ucfirst($key)) && ! is_null($value)) {
                $query->{$key}($value);
            }
        }

        return $query->orderBy('created_at', 'desc')->with(['creator', 'updater'])->paginate()->toArray();
    }

    public function getAllDeleted(array $filters = []): array
    {
        $query = DelectedSystemUser::query();

        foreach ($filters as $key => $value) {

            if ($key === 'recently_created') {
                continue;
            }

            if (method_exists($this->model, 'scope'.ucfirst($key)) && ! is_null($value)) {
                $query->{$key}($value);
            }
        }

        return $query->orderBy('deleted_at', 'desc')->with(['creator', 'updater'])->paginate()->toArray();
    }

    public function findOne(string $id): ?SystemUser
    {
        return $this->model->with(['creator', 'updater'])->find($id);
    }

    public function create(SystemUserCreateDTO $dto): SystemUser
    {
        return $this->model->create($dto->toArray());
    }

    public function update(string $id, SystemUserUpdateDTO $dto): SystemUser
    {
        $user = $this->model->findOrFail((string) $id);

        if (! $user) {
            throw new \Exception('Usuário não encontrado');
        }

        $user->update($dto->toArray());

        return $user->fresh();
    }

    public function delete(string $id): void
    {
        $user = $this->model->findOrFail($id);
        $user->delete();
    }

    public function updatePassword(string $id, SystemUserUpdatePasswordDTO $dto): SystemUser
    {
        $user = $this->model->findOrFail($id);

        $user->update($dto->toArray());

        return $user->fresh();
    }

    public function changeStatus(string $id, SystemUserChangeStatusDTO $dto): SystemUser
    {
        $user = $this->model->findOrFail($id);

        $user->update($dto->toArray());

        return $user->fresh();
    }
}
