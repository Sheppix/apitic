<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armure extends Model
{
    protected $fillable = ['id', 'nom_armure'];

    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
}
