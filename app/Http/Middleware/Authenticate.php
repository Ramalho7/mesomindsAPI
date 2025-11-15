<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        return null;
    }

    protected function unauthenticated($request, array $guards)
    {
        if ($request->expectsJson()) {
            abort(401, 'Não autorizado');
        }

        parent::unauthenticated($request, $guards);
    }
}
