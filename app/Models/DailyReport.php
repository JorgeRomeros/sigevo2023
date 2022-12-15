<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DailyReport extends Model
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
