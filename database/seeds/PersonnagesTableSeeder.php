<?php

use Illuminate\Database\Seeder;

class PersonnagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Personnage::Class, 10)->create();
    }
}
