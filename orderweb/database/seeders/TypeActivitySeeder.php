<?php

namespace Database\Seeders;

use App\Models\TypeActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeActivity::insert([
            ['descripcion'=> 'REPARACION'],
            ['descripcion'=> 'CONSTRUCCION'],
            ['descripcion'=> 'INSTALACION'],
            ['descripcion'=> 'SUSPENSION'],
            ['descripcion'=> 'OTROS'],

        ]);
    }
}
