<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    public $table = "niveles";

    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
}
