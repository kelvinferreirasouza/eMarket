<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioCargo extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'status'
    ];
    
    protected $table = 'usuariocargos';
}
