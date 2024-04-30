<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $route = '';

        if (Auth::guard('admins')->user()) {
            // $route =  to_route('admin_dashboard');
            $route =  RouteServiceProvider::HOME_ADMIN;
        }

        if (Auth::guard('psychos')->user()) {
            // $route =  to_route('psychologue_dashboard');
            // dd('Je suis psy');
            $route =  RouteServiceProvider::HOME_PSY;
        }

        if (Auth::guard('etudiants')->user()) {
            // $route =  to_route('etudiant_dashboard');
            $route =  RouteServiceProvider::HOME_ETUDIANT;
        }

        return redirect()->intended($route);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        if (Auth::guard('admins')->user()) {
            Auth::guard('admins')->logout();
        }

        if (Auth::guard('psychos')->user()) {
            Auth::guard('psychos')->logout();
        }

        if (Auth::guard('etudiants')->user()) {
            Auth::guard('etudiants')->logout();
        }

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
 