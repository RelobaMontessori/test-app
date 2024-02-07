<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comentario;
use App\Models\Receta;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users=Usuario::factory()->count(20)->has(Receta::factory()->count(2))->create();
        foreach($users as $user){
            Comentario::factory()->count(5)->for($user,'autor')->for($user->recetas[0])->create();
            Comentario::factory()->count(5)->for($user,'autor')->for($user->recetas[1])->create();
        }
    }
}
