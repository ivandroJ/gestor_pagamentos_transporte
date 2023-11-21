<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudantesController extends Controller
{
    public function index()
    {
        $header_title = 'Estudantes';

        $header_path = [
            [
                'label' => 'Estudantes',
                'is_active' => true
            ]
        ];
        return view('estudantes.index', compact('header_title', 'header_path'));
    }



    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'bilhete_identidade' => 'required|unique:estudantes,bilhete_identidade',
                'nome' => 'required|string|max:355',
            ]
        );


        $estudante = Estudante::create(
            $request->only('bilhete_identidade', 'nome')
        );

        $url = redirect('/estudantes/' . $estudante->id);

        return $estudante ? $url
            ->with('success_msg', 'Estudante registado com sucesso!'):
            $url->with('error_msg', 'Ocorreu um erro!');
    }
}
