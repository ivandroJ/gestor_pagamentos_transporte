<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GrupoUsers;
use App\Models\User;
use App\Models\UserGrupoUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionsController extends Controller
{
    public function login()
    {
        $is_admin = true;

        $count = User::where('is_active', 1)
            ->count();

        return $count ? view('sessions.login', compact('is_admin'))
            : redirect('registar')->with('warning_msg', 'Sem usuários! Registe um novo.');
    }

    public function authenticate(Request $request)
    {
        $this->validate(
            $request,
            [
                "utilizador" => "required",
                "senha" => "required"
            ],
            [
                "utilizador" => "Utilizador",
                "senha" => "Senha"
            ]
        );


        $user = User::where('id', $request->utilizador)
            ->first();


        if (Auth::attempt(["id" => $request->utilizador, "password" => $request->senha], false)) {

            $request->session()->regenerate();

            return redirect()->intended('');
        } else {

            return back()->withErrors([
                "utilizador" => "Credenciais inválidas!"
            ]);
        }
    }

    public function logout(Request $request)
    {

        Auth::logout();

        Session::flush();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
