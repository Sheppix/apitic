<?php

use App\Classe;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'nom_classe' => 'Guerrier'],
            ['id' => 2, 'nom_classe' => 'Mage'],
            ['id' => 3, 'nom_classe' => 'Prêtre'],
            ['id' => 4, 'nom_classe' => 'Chasseur'],

        ];

        foreach ($items as $item) {
            Classe::create($item);
        }
    }
}
