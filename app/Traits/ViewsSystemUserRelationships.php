<?php

namespace App\Traits;

use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait ViewsSystemUserRelationships
{
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
