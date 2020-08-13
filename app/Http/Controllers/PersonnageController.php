<?php

namespace App\Http\Controllers;

use App\Personnage;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
        $perso->delete();

        return redirect('/home')->with('success', 'Personnage effacer!');
    }
}
