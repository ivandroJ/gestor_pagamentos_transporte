<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoLectivoTransportePeriodoMensalidade extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'ano_lectivo_periodo_transporte_id',
        'ano_lectivo_mensalidade_id',
        'valor',
        'data_limite',
    ];

    public $timestamps = false;

}
