<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StandarMinute extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'folio',
        'asunto',
        'tema',
        'lugar',
        'tramo',
        'agenda',
        'dirigido_a',
        'fecha_inicio',
        'hora_inicio',
        'fecha_proxima_reunion',
        'hora_programada',
        'hora_cierre',
    ];
}
