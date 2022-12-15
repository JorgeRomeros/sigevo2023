<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InformationNote extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'folio',
        'fecha',
        'lugar',
        'elaboro',
        'dirigido_a',
        'con_copia_para',
        'descripcion',
    ];
}
