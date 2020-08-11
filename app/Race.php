<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = ['id', 'nom_race'];

    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
}
