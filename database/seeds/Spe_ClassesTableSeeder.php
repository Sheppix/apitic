<?php

use App\Spe_classe;
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
        $items = [
            ['id' => 1, 'nom_spe_classe' => 'Arme'],
            ['id' => 2, 'nom_spe_classe' => 'Fureur'],
            ['id' => 3, 'nom_spe_classe' => 'Protection'],
            ['id' => 4, 'nom_spe_classe' => 'Givre'],
            ['id' => 5, 'nom_spe_classe' => 'Feu',],
            ['id' => 6, 'nom_spe_classe' => 'Arcane'],
            ['id' => 7, 'nom_spe_classe' => 'Sacré'],
            ['id' => 8, 'nom_spe_classe' => 'Discipline'],
            ['id' => 9, 'nom_spe_classe' => 'Ombre'],
            ['id' => 10, 'nom_spe_classe' => 'Précision'],
            ['id' => 11, 'nom_spe_classe' => 'Maitrise des bêtes'],
            ['id' => 12, 'nom_spe_classe' => 'Survie'],
        ];

        foreach ($items as $item) {
           Spe_classe::create($item);
        }

       
    }
}
