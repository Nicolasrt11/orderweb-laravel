<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technician = new Technician();
        $technician->document = 1117349878;
        $technician->name = 'Nicolas Tapasco';
        $technician->especiality = 'Tecnico en programacion';
        $technician->phone = '14432435';
        $technician->save();
    }

}
