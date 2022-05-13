<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{

    public function listaGenero()
    {
        $listaGenero = Genero::all();

        return view('lista-genero', ['listaGenero' => $listaGenero]);
    }

    public function cadastroGenero()
    {
        return view('cadastro-genero');
    }

    public function salvarGenero(Request $request)
    {
        var_dump($request->nome);

        Genero::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao
        ]);

        return redirect('/genero');
    }

    public function excluir(Request $request)
    {
        $genero = Genero::find($request->id);
        $genero->delete();

        return redirect('/genero');
    }
}
