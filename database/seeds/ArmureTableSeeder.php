<?php

use Illuminate\Database\Seeder;

class ArmureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Armure::Class, 10)->create();
    }
}
