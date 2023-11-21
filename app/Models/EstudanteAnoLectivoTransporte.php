<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudanteAnoLectivoTransporte extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'estudante_id',
        'ano_lectivo_transporte_periodo_id',
    ];

    public $timestamps = true;

}
