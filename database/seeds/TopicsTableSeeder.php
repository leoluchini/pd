<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['name'=>'Capacitación']);
        Topic::create(['name'=>'Capital de trabajo']);
        Topic::create(['name'=>'Innovación']);
        Topic::create(['name'=>'Servicios profesionales']);
    }
}
