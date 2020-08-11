<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['id', 'nom_classe', 'id_spe_classe'];

    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
    public function spe_classe()
    {
        return $this->hasMany('App\Spe_classe');
    }
}
