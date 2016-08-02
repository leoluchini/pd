<?php

use Illuminate\Database\Seeder;
use App\Indicator;

class IndicatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Indicator::create(['name' => 'Clima/Termómetro de Inversiones (CI/TI)', 'value' => '+1,0%', 'year' => '2015']);
        Indicator::create(['name' => 'Índice de Consumo Eléctrico Industrial (ICEI).', 'value' => '29,2%', 'year' => '2015']);
        Indicator::create(['name' => 'Índice de Precios del Consumidor (IPC).', 'value' => '-2,6% del PBI', 'year' => '2015']);
        Indicator::create(['name' => 'Saldo comercial', 'value' => '-4,0% del PBI', 'year' => '2015']);
    }
}
