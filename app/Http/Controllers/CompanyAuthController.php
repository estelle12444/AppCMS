<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CompanyAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = Auth::user();


            if ($user->role->nom === 'admin') {
                return redirect()->route('Front.admin.home');
            } else {
                if ($user->status) {
                    return redirect()->route('Front.profil.home');
                } else {
                    // The company's status is false, log them out and show an error message.
                    Auth::logout();
                    return redirect()->route('auth.login')->with('error', "Votre compte n'est pas activé.");
                }
            }
        } else {
            // Authentication failed
            return redirect()->route('auth.login')->with('error', trans('mauvais password'));
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    
}
