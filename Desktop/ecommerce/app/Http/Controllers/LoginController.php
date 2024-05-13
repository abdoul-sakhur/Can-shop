<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequestForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Dologin()
    {
        return view('admin.login');
    }

    public function login(LoginRequestForm $request)
    {
        // User::create([
        //     'username' => 'sarba',
        //     'email' => 'sarba@gmail.com',
        //     'password' => '00000',
        // ]);

        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'vos identifiants sont incorrect',
        ])->onlyInput('email');
    }
}
