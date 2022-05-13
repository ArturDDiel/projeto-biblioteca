<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function listaPessoa(Request $request)
    {
        $listaPessoa = Pessoa::all();

        return view('lista-pessoa', [ 'listaPessoa' => $listaPessoa ]);
    }

    public function cadastroPessoa()
    {
        return view('cadastro-pessoa');
    }

    public function salvarPessoa(Request $request)
    {

        $imageName = time() . '.' . $request->fotoPessoa->extension();
        $request->fotoPessoa->storeAs('public/foto-pessoa', $imageName);

        Pessoa::create([
            'nome' => $request->nome,
            'fotoPessoa' => $imageName,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'telefone' => $request->telefone,
            'email' => $request->email
        ]);

        return redirect('/pessoa');
    }

    public function excluir(Request $request)
        {
            $pessoa = Pessoa::find($request->id);
            $pessoa->delete();
            
            return redirect('/pessoa');
        }

}