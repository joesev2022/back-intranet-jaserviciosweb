<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'apellido', 
        'celular', 
        'email',
        'direccion',
        'descripcion',
        'pais_id',
    ];

    public function pais() {
        return $this->belongsTo(Pais::class);
    }
}
