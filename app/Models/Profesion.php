<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    public $table = "profesiones";

    use HasFactory;

    protected $fillable = [
        'nombre',
    ];
}
