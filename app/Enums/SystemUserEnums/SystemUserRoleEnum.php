<?php

namespace App\Enums\SystemUserEnums;

enum SystemUserRoleEnum: string
{
    case TEACHER = 'teacher';
    case STUDENT = 'student';
    case ADMIN = 'admin';
    case MODERATOR = 'moderator';
    case OPERATOR = 'operator';
}
