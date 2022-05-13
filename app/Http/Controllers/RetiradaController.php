<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retirada;

class RetiradaController extends Controller
{
    public function listaRetirada()
    {
        $listaRetirada = Retirada::all();

        return view('lista-retirada', ['listaRetirada' => $listaRetirada]);
    }

    public function cadastroRetirada()
    {
        return view('cadastro-retirada');
    }

    public function salvarRetirada(Request $request)
    {
        var_dump($request->nome);

        Retirada::create([
            'id' => $request->id,
            'dataRetirada' => $request->dataRetirada,
            'dataDevolucao' => $request->dataDevolucao,
            'pessoa' => $request->pessoa,
            'livro' => $request->livro,
        ]);
        return redirect('/retirada');
    }

    public function excluir(Request $request)
        {
            $retirada = Retirada::find($request->id);
            $retirada->delete();
    
            return redirect('/retirada');
        }
}
