<?php

namespace App\Http\Controllers;

use App\Armure;
use App\Classe;
use App\Personnage;
use App\Race;
use App\Specification;
use App\User;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonnageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $armure = Armure::all()->pluck('nom_armure', 'id');
        $input = $request->input('armure');
        $keyArmure = $armure->search($input);
        $existArmure = Armure::where('nom_armure', $request->input('armure'))->exists();
        
        $race = Race::all()->pluck('nom_race', 'id');
        $input = $request->input('race');
        $keyRace = $race->search($input);
        $existRace = Race::where('nom_race', $request->input('race'))->exists();

        $classe = Classe::all()->pluck('nom_classe', 'id');
        $input = $request->input('classe');
        $keyClasse = $classe->search($input);
        $existClasse = Classe::where('nom_classe', $request->input('classe'))->exists();

        /*$specification = Specification::all()->pluck('nom_specification', 'id');
        $input = $request->input('specification');
        $keySpecification = $specification->search($input);
        $existSpecification = Specification::where('nom_specification', $request->input('specification'))->exists();*/

        
  
          if ($existArmure && $existRace &&  $existClasse ) {
            $perso = new Personnage();
            $perso -> pseudo = $request->get('pseudo');
            $perso -> id_armure  = $keyArmure;
            $perso -> id_race =   $keyRace;
            $perso -> id_classe =  $keyClasse;
            $perso -> id_specification = 1;
            $perso -> id_user =  1;
        } else {
            
            return redirect()->route('home.create');
        }

        $perso->save();
        return redirect()->route('home.index')
            ->with('success', 'Personnage successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perso = Personnage::find($id);

        return view('personnage.edit', compact('perso'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pseudo'=> 'required|max:255',
           // 'race'=> 'required|max:255',
        ]);
        
        $perso = Personnage::find($id);
        $perso->pseudo = $request->get('pseudo');
      /*  $perso = Race::find($id);
        $perso->race = $request->get('race');*/
        $perso->save();

        return redirect('/home')->with('success', 'Message modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perso = Personnage::findOrFail($id);
        $perso-> delete();

        return redirect('/home')->with('success', 'Personnage effacer!');
    }
}
