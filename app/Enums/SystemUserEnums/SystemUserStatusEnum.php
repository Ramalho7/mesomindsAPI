<?php
namespace App\Enums\SystemUserEnums;

enum SystemUserStatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BANNED = 'banned';
    case PENDING = 'pending';
}
