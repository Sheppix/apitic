<?php

use Illuminate\Database\Seeder;

class Spe_ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Spe_Classe::Class, 10)->create();
    }
}
