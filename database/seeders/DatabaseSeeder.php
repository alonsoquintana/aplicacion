<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Storage::makeDirectory('cursos');

        // // Obtén la ruta completa del directorio 'cursos'
        // $cursosPath = storage_path('\cursos');

        // // Crea el directorio si no existe
        // if (!File::exists($cursosPath)) {
        //     File::makeDirectory($cursosPath, 0777, true); // 0755 para otorgar permisos de escritura
        // }

        // // Otorga permisos de escritura al directorio 'cursos'
        // File::chmod($cursosPath, 0777);

        $this->call(UserSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(CourseSeeder::class);
        
    }
}
