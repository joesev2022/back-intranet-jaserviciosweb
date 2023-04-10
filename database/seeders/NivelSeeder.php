<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nivel;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $niveles = [
            ['nombre'=>'Junior'],
            ['nombre'=>'Semi Senior'],
            ['nombre'=>'Senior'],
        ];
        foreach ($niveles as $key => $value) {
            Nivel::create($value);
        }
    }
}
