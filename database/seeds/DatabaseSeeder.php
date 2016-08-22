<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(IndicatorsTableSeeder::class);
        $this->call(EntitiesTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
