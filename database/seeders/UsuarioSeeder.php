<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nombre_usuario' => Str::random(15),
            'nombre' => Str::random(15),
            'apellidos' => Str::random(15),
            'correo' => Str::random(10).'@mail.com',
            'experiencia' => 'Principiante',
            'esAdmin'=> 0
        ]);
    }
}
