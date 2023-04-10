<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoColaborador;
use Illuminate\Support\Facades\DB;

class TipoColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            ['nombre'=>'Administrador'],
            ['nombre'=>'Empleado']
        ];
        foreach ($tipos as $key => $value) {
            TipoColaborador::create($value);
        }
    }
}
