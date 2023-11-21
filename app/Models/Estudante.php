<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'bilhete_identidade',
        'nome',
        'data_nascimento',
    ];

    public $timestamps = true;

    public $casts = [
        "data_nascimento" => 'datetime',
    ];
}
