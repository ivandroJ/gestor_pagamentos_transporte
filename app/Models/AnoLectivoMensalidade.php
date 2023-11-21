<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoLectivoMensalidade extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'ano_lectivo_id',
        'mes',
        'mes_designacao',
        'ano',
    ];

    public $timestamps = false;
}
