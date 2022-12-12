<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escrito extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'folio',
        'remitente',
        'destinatario',
        'fecha',
        'lugar',
        'asunto',
        'contenido',
        'ccp',
        'elaboro',
    ];
}
