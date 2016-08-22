<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(['name' => 'Realidad Productiva', 'description' => 'Diagnóstico mensual sobre el desempeño de la economía real.']);
        Service::create(['name' => 'Radares', 'description' => 'Reportes integrados para conocer la economía internacional, el desempeño industrial, el sector financiero y el panorama fiscal.']);
        Service::create(['name' => 'Proyecciones económicas', 'description' => 'Estimaciones sobre el desempeño futuro de las principales variables macroeconómicas.']);
        Service::create(['name' => 'INVER-PYME', 'description' => 'Informe ejecutivo sobre el desempeño del Índice de Perspectivas de Inversión Productiva (IPIP) y alternativas de financiamiento para las inversiones de tu PyME.']);
        Service::create(['name' => 'El Diario del Lunes', 'description' => 'Resumen semanal de las noticias más destacadas en materia económica.']);
        Service::create(['name' => 'PROPIO PyME', 'description' => 'Asesoramiento económico-financiero personalizado para que tu empresa pueda continuar creciendo.']);
    }
}
