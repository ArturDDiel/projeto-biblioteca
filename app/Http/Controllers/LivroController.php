<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    
    public function listaLivro() {
        $listaLivro = Livro::all();

        return view('lista-livros', ['listaLivro' => $listaLivro]);
    }

    public function cadastroLivro() {
        return view('cadastro-livros');
        
    }

    public function salvarLivro(Request $request) {
    
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        Livro::create([
           'nome' => $request->nome,
           'autor' => $request->autor,
           'descricao' => $request->descricao,
           'image' => $imageName
        ]);

            return redirect('/livro');
        
    }

    public function excluir(Request $request)
        {
            $genero = Livro::find($request->id);
            $genero->delete();
            
            return redirect('/livro');
        }
}



