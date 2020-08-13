<?php

use Illuminate\Database\Seeder;
use App\Armure;

class ArmuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'nom_armure' => 'Titane'],
            ['id' => 2, 'nom_armure' => 'Cuir'],
            ['id' => 3, 'nom_armure' => 'Métal'],
            ['id' => 4, 'nom_armure' => 'Tissu'],
            ['id' => 5, 'nom_armure' => 'Peau'],
        ];

        foreach ($items as $item) {
            Armure::create($item);
        }
    }
}
