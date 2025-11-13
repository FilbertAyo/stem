<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(Request $request): View
    {
        if ($request->route()?->named('admin.*')) {
            return view('admin.auth.login');
        }

        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        session()->regenerate();

        return redirect()->intended(
            $this->resolveRedirectPath($request)
        );
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = $request->user();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(
            $user && $user->role === 'admin'
                ? route('admin.login')
                : route('login')
        );
    }

    protected function resolveRedirectPath(Request $request): string
    {
        $user = $request->user();

        if ($user && $user->role === 'admin') {
            return route('admin.dashboard', absolute: false);
        }

        return route('dashboard', absolute: false);
    }
}
