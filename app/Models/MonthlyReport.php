<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MonthlyReport extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'elabora',
        'recibe',
        'titulo',
        'imagen',
        'no_informe_mensual',
        'fecha_inicio_mes',
        'fecha_final_mes',
        'semanas',
        'descripcion',
    ];
}
