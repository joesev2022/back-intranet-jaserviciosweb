<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    public $table = "colaboradores";
    
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'apellido', 
        'celular', 
        'email',
        'direccion',
        'pais_id',
        'nivel_id',
        'tipo_colaborador_id',
        'profesion_id',
    ];

    public function pais() {
        return $this->belongsTo(Pais::class);
    }

    public function profesion() {
        return $this->belongsTo(Profesion::class);
    }

    public function nivel() {
        return $this->belongsTo(Nivel::class);
    }

    public function tipoColaborador() {
        return $this->belongsTo(TipoColaborador::class);
    }
}
