<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spe_classe extends Model
{
    protected $fillable = ['id', 'nom_spe_classe'];
    public function classe()
    {
        return $this->hasOne('App\Classe');
    }
}
