<?php

use Illuminate\Database\Seeder;
use App\Entity;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entity::create(['name'=>'Emprendedor']);
        Entity::create(['name'=>'Empresa Grande']);
        Entity::create(['name'=>'PyMES']);
    }
}
