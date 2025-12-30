<?php

namespace App\Models;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use App\Traits\SystemUserScopes;
use Illuminate\Database\Eloquent\Model;

class SystemUserCreatedDaily extends Model
{
    use SystemUserScopes;

    protected $table = 'system_users_created_daily';

    public $timestamps = false;

    public $incrementing = false;

    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $casts = [
        'role' => SystemUserRoleEnum::class,
        'status' => SystemUserStatusEnum::class,
    ];
}
