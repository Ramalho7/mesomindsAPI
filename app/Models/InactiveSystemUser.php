<?php

namespace App\Models;

use App\Enums\SystemUserEnums\SystemUserRoleEnum;
use App\Enums\SystemUserEnums\SystemUserStatusEnum;
use App\Traits\SystemUserScopes;
use App\Traits\ViewsSystemUserRelationships;
use Illuminate\Database\Eloquent\Model;

class InactiveSystemUser extends Model
{
    use SystemUserScopes, ViewsSystemUserRelationships;

    protected $table = 'inactive_system_users_view';

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
