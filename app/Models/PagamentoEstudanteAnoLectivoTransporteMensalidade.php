<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoEstudanteAnoLectivoTransporteMensalidade extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'pagamento_estudante_id',
        'ano_lectivo_transporte_periodo_mensalidade_id',
        'valor'
    ];

    public $timestamps = true;

}
