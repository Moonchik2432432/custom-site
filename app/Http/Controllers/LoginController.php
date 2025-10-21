<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Валидация
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/data');
        }

        // При ошибке логина отправляем сообщение pazinojumi
        return back()
            ->withErrors([
                'name' => 'Nekorekts lietotājvārds vai parole.',
            ])->onlyInput('name')
            ->with('pazinojumi', 'Nekorekts lietotājvārds vai parole. Lūdzu mēģiniet vēlreiz.');
    }

    public function register(Request $request)
    {
        // Валидация
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $credentials['name'],
            'password' => Hash::make($credentials['password']),
            'email' => 'a' . uniqid() . '@gamil.com', // Dummy email
        ]);

        return back()->with('success', 'Reģistrācija veiksmīga! Tagad varat pieteikties.');
    }
}
