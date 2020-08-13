<?php

namespace App\Http\Controllers;

use App\Armure;
use App\Classe;
use App\Personnage;
use App\Race;
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
            ->select('personnages.id','personnages.pseudo', 'races.nom_race', 'specifications.nom_specification','users.name','armures.nom_armure','classes.nom_classe')
            ->orderBy('personnages.id')
            ->get();
            return view('personnage.index',[
                'perso' => $perso
            ]);
    }
    
    public function create()
    {
        $perso = DB::table('personnages')
            ->join('races', 'id_race', '=', 'races.id')
            ->join('specifications', 'id_specification', '=', 'specifications.id')
            ->join('users', 'id_user', '=', 'users.id')
            ->join('armures', 'id_armure', '=', 'armures.id')
            ->join('classes', 'id_classe', '=', 'classes.id')
            ->select('personnages.id','personnages.pseudo', 'races.nom_race', 'specifications.nom_specification','users.name','armures.nom_armure','classes.nom_classe')
            ->orderBy('personnages.id')
            ->get();
        
            return view('personnage.create',[
                'perso' => $perso
            ]);
    }

    
    public function store(Request $request)
    { 
        $perso = new Personnage();
        $armure = new Armure();
        $race = new Race();
        $classe = new Classe();
        
        $perso->pseudo = $request->get('pseudo');
        $armure->nom_armure= $request->get('armure');
        $race->nom_race= $request->get('race');
        $classe->nom_classe= $request->get('classe');

        $perso->save();
        $armure->save();
        $race->save();
        $classe->save();

        return view('personnage.create', [
            'perso' => $perso,
            'armure' => $armure,
            'race' => $race,
            'classe' => $classe,
        ]);
    }

    
    public function delete($id)
    {
        $perso = Personnage::find($id);
        $perso->delete();

        return redirect('/home')->with('success', 'Personnage effacer!');
    }
} 
        

      