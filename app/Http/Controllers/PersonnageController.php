<?php

namespace App\Http\Controllers;

use App\Personnage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonnageController extends Controller
{
    public function list()
    {
        $perso = DB::table('personnages')
            ->join('races', 'id_race', '=', 'races.id')
            ->join('specifications', 'id_specification', '=', 'specifications.id')
            ->join('users', 'id_user', '=', 'users.id')
            ->join('armures', 'id_armure', '=', 'armures.id')
            ->join('classes', 'id_classe', '=', 'classes.id')
            ->select('personnages.id','users.pseudo', 'races.nom_race', 'specifications.nom_specification','users.name','armures.nom_armure','classes.nom_classe')
            ->orderBy('personnages.id')
            ->get();
        
            return view('personnage.index', [
                'perso' => $perso
            ]);
    }
} 
        

      