<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GrupoUsers;
use App\Models\User;
use App\Models\UserGrupoUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $header_title = 'Utilizadores';

        $header_path = [
            [
                'label' => 'Utilizadores',
                'is_active' => true
            ]
        ];

        $users = User::all();
        return view('users.index', compact('header_title', 'header_path', 'users'));
    }

    public function register()
    {

        $count_users = User::where('is_active', 1)
            ->count();

        if (!Auth::check() && $count_users)
            return redirect('/login');


        $header_title = 'Novo Utilizador';
        $header_path = [
            [
                'label' => 'Utilizadores',
                'url' => url('users'),
            ],
            [
                'label' => 'Novo',
                'is_active' => true
            ]
        ];


        return view(
            $count_users ? 'users.register' : 'users.register_first',
            compact('header_title', 'header_path')
        );
    }

    public function store_register(Request $request)
    {

        $count_users = User::where('is_active', 1)
            ->count();

        if (!Auth::check() && $count_users)
            return redirect('/login');

        $this->validate(
            $request,
            [
                'name' => 'required|string|max:350',
                'telemovel' => 'required|integer',
                'email' => 'required|email|unique:users,email',
            ],
            [],
            [
                'name' => 'Nome',
                'telemovel' => 'Telemóvel',
                'email' => 'E-mail',
            ]
        );

        $user = User::create(array_merge($request->all(), [
            'password' => bcrypt($request->senha),
        ]));


        return back()->with('success_msg', 'Utilizador registado com sucesso!');
    }
}
