<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpiamos la tabla antes de insertar nuevos datos
        DB::table('projects')->truncate();

        // Insertamos datos de ejemplo
        DB::table('projects')->insert([
            [
                'title' => 'Lionel Messi',
                'description' => '<b>GOAT</b>: campeón del mundo',
                'image' => 'img/project/lio-1.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cristiano Ronaldo',
                'description' => 'El segundo mejor futbolista de la historia, después de Messi',
                'image' => 'img/project/cr7.png',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Puedes agregar más proyectos según sea necesario
        ]);
    }
}
