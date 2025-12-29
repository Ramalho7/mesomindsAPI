<?php

namespace App\Models;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use App\Traits\SystemUserScopes;
use App\Traits\ViewsSystemUserRelationships;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActiveSystemUser extends Model
{
    use SystemUserScopes, ViewsSystemUserRelationships;

    protected $table = 'active_system_users_view';

    public $timestamps = false;

    public $incrementing = false;

    protected $guarded = [];

    protected $primaryKey = 'string';

    protected $casts = [
        'role' => SystemUserRoleEnum::class,
        'status' => SystemUserStatusEnum::class,
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'created_by')
            ->select(['id', 'name', 'email', 'status']);
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(SystemUser::class, 'updated_by')
            ->select(['id', 'name', 'email', 'status']);
    }
}
