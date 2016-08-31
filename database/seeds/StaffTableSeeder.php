<?php

use Illuminate\Database\Seeder;
use App\StaffPrimary;
use App\StaffSecondary;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      StaffPrimary::create(['full_name'=> 'Sebastián Alvarez Hayes', 'degree' => 'Licenciado en economía.', 'description' => 'Mercado de trabajo y análisis de datos', 'image' => 'images/equipo/pm1.jpg']);
      StaffPrimary::create(['full_name' => 'Martín Pollera', 'degree' => 'Licenciado en economía.', 'description' => 'Cadena de valor, sectores productivos, PyMEs', 'image' => 'images/equipo/pm2.jpg']);
      StaffPrimary::create(['full_name' => 'Sebastián Lucero', 'degree' => 'Licenciado en economía.', 'description' => 'Comercio exterior y Panorama internacional', 'image' => 'images/equipo/pm3.jpg']);

      StaffSecondary::create(['full_name' => 'Mauro Álvarez', 'degree' => 'Analista Senior', 'description' => 'Licenciado en economía. Tecnología e Innovación.']);
      StaffSecondary::create(['full_name' => 'Emiliana Gisande', 'degree' => 'Analista Senior', 'description' => 'Licenciado en economía. Tecnología e Innovación.']);
      StaffSecondary::create(['full_name' => 'Javier Trezza', 'degree' => 'Analista Senior', 'description' => 'Licenciado en economía. Tecnología e Innovación.']);
      StaffSecondary::create(['full_name' => 'Sebastián Nader', 'degree' => 'Analista Senior', 'description' => 'Licenciado en economía. Tecnología e Innovación.']);
      StaffSecondary::create(['full_name' => 'Santiago Adamcik', 'degree' => 'Analista Senior', 'description' => 'Licenciado en economía. Tecnología e Innovación.']);
    }
}

  

