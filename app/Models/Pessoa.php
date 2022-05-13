<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    // define o nome da tabela
    protected $table = 'pessoa';

    // quais atributos podem ser preenchidos 
    protected $fillable = ['nome', 'fotoPessoa', 'endereco', 'telefone', 'numero', 'email'];

    // diz para o Eloquent não criar o atributo created_at e deleted_at
    public $timestamps = false;
}
