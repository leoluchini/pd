<?php

use Illuminate\Database\Seeder;
use App\CoverPage;

class CoverPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CoverPage::create(['image' => 'images/portadas/MP-1.png','title' => 'Coyuntura y proyecciones económicas', "description" => "Producimos información económica para que puedas tomar las mejores decisiones, ahora y siempre." ]);
        CoverPage::create(['image' => 'images/portadas/MP-2.png','title' => ' Producción y Desarrollo', "description" => "realizamos estudios sobre las diferentes cadenas de valor, el mercado de trabajo y el comercio exterior." ]);
        CoverPage::create(['image' => 'images/portadas/MP-3.png','title' => 'Sector Público y Privado', "description" => "Asesoramos a empresas, cámaras empresariales, y gobiernos en la planificación de sus políticas públicas." ]);
        CoverPage::create(['image' => 'images/portadas/MP-4.png','title' => ' Finanzas empresariales e inversiones', "description" => "Asistimos a tu empresa para continuar desarrollando su negocio, con opciones de financiamiento muy convenientes para tus inversiones." ]);
        CoverPage::create(['image' => 'images/portadas/MP-5.png','title' => 'Somos parte de tu equipo', "description" => " Esperamos su contacto con nosotros." ]);
    }
}