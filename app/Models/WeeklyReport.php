<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WeeklyReport extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'elabora',
        'recibe',
        'titulo',
        'imagen',
        'no_informe',
        'fecha_inicio_semana',
        'fehca_final_semana',
        'descripcion',
    ];
}
