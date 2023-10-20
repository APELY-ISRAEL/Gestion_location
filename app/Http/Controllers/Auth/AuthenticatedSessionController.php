<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();


      //  return redirect()->intended(RouteServiceProvider::HOME);
        // Personnalisez la redirection en fonction du rôle de l'utilisateur
        if (Auth::user()->isAdmin()) {
           // Rediriger les administrateurs vers le tableau de bord de l'admin
           return redirect()->route('admin.dashboard');
       } else {
           // Rediriger les clients vers la page d'accueil
           return redirect()->intended('/');
       }

         // Personnalisez la redirection en fonction du rôle de l'utilisateur
         if (Auth::user()->isAdmin()) {
            // Rediriger les administrateurs vers le tableau de bord de l'admin
            return redirect()->route('admin.dashboard');
        } else {
            // Rediriger les clients vers la page d'accueil
            return redirect()->intended('/');
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
