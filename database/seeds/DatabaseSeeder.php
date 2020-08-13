<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArmuresTableSeeder::class);
        $this->call(Spe_ClassesTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(SpecificationsTableSeeder::class);
        $this->call(RacesTableSeeder::class);
        $this->call(PersonnagesTableSeeder::class);
    }
}
