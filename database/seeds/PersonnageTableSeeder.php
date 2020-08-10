<?php

use Illuminate\Database\Seeder;

class PersonnageTableSeeder extends Seeder
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
