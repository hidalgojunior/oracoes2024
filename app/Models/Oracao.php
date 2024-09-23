<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oracao extends Model
{
    use HasFactory;

    protected $table = 'oracoes';

    protected $fillable = [
        'nome_solicitante',
        'pedido_oracao',
        'status',
    ];
}
