<?php

namespace Database\Seeders;

use App\Models\Causal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CausalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Causal:: insert([

        ['descripcion' => 'REPARACION CONTADOR'],
        ['descripcion' => 'SUSPENSION DEL SERVICIO'],
        ['descripcion' => 'RECONEXION DEL SERVICIO'],
        ['descripcion' => 'INSTALACION DEL CONTADOR'],
        ['descripcion' => 'CAMBIO DEL CONTADOR'],

       ]);
    }
}
