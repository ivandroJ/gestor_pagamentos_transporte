<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoEstudante extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'estudante_ano_lectivo_transporte_id',
        'data_pagamento',
        'quantia',
        'observacao',
        'estado',
    ];

    public $timestamps = true;

    public $casts = [
        "data_pagamento" => 'datetime',
    ];

}
