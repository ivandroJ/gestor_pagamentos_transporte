<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoLectivoTransportePeriodo extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'ano_lectivo_id',
        'transporte_id',
        'inicio_recolha',
        'inicio_distribuicao',
        'valor_mensalidade',
    ];

    public $timestamps = true;

}
