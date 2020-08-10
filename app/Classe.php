<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
    public function spe_classe()
    {
        return $this->hasMany('App\Spe_classe');
    }
}
