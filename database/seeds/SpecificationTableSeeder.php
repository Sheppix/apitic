<?php

use Illuminate\Database\Seeder;

class SpecificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Specification::Class, 10)->create();
    }
}
