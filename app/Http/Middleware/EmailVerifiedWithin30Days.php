<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmailVerifiedWithin30Days
{
    public function handle(Request $request, Closure $next)
    {
        return $this->verifyEmailWithinDays($request, $next, 30);
    }

    protected function verifyEmailWithinDays(Request $request, Closure $next, int $days)
    {
        $user = $request->user();

        \Log::info('EmailVerifiedWithin30Days middleware', [
            'user_id' => $user?->id,
            'user_role' => $user?->role,
            'has_verified_email' => $user?->hasVerifiedEmail(),
            'email_verified_at' => $user?->email_verified_at,
        ]);

        if (! $user || ! $user->hasVerifiedEmail()) {
            return response()->json(['message' => 'E-mail não verificado.'], 403);
        }

        if ($user->email_verified_at->diffInDays(date: now()) > $days) {
            return response()->json([
                'message' => "Seu e-mail não foi verificado nos últimos {$days} dias.",
            ], 403);
        }

        return $next($request);
    }
}
