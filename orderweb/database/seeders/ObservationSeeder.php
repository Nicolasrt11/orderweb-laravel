<?php

namespace Database\Seeders;

use App\Models\Observation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Observation::insert([
        ['descripcion' => 'perro bravo'],
        ['descripcion' => 'Contador con candado'],
        ['descripcion' => 'Contador inaccesible'],
        ['descripcion' => 'Predio en construccion'],
        ['descripcion' => 'No existe contador'],

       ]);
    }
}
