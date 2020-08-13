<?php

use App\Race;
use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'nom_race' => 'Orc'],
            ['id' => 2, 'nom_race' => 'Humain'],
            ['id' => 3, 'nom_race' => 'Gobelin'],
            ['id' => 4, 'nom_race' => 'Elfe'],
            ['id' => 5, 'nom_race' => 'Nain'],
        ];

        foreach ($items as $item) {
            Race::create($item);
        }
    }
}
