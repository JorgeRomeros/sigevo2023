<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformationNote extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'area',
        'asunto',
        'fecha_informe',
        'entidad_emite',
        'entidad_recibe',
        'aprueba',
        'enterado',
        'actividades',
    ];
}
