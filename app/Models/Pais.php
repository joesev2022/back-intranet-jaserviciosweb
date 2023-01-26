<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    public $table = "paises";

    use HasFactory;

    protected $fillable = [
        'nombre', 'codigo_movil'
    ];
}
