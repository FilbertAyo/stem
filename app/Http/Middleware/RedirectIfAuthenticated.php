<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated as BaseRedirectIfAuthenticated;
use Illuminate\Http\Request;

class RedirectIfAuthenticated extends BaseRedirectIfAuthenticated
{
    /**
     * Get the path the user should be redirected to when they are authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        $user = $request->user();

        if ($user && $user->role === 'admin') {
            return route('admin.dashboard');
        }

        return route('dashboard');
    }
}

