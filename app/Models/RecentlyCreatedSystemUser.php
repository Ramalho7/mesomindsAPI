<?php

namespace App\Models;

use App\Traits\SystemUserScopes;
use App\Traits\ViewsSystemUserRelationships;
use Illuminate\Database\Eloquent\Model;

class RecentlyCreatedSystemUser extends Model
{
    use SystemUserScopes, ViewsSystemUserRelationships;

    protected $table = 'recently_created_system_users_view';

    public $timestamps = false;

    public $incrementing = false;

    protected $guarded = [];

    protected $primaryKey = 'string';
}
