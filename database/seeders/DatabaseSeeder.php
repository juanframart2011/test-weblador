<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
    }
}

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Limpiamos la tabla antes de insertar nuevos datos
        DB::table('users')->truncate();

        // Insertamos el usuario por defecto
        DB::table('users')->insert([
            'name' => 'Juan',
            'email' => 'juan@test.com',
            'password' => Hash::make('123456'), // Laravel automáticamente encripta la contraseña
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Puedes agregar más usuarios según sea necesario
    }
}