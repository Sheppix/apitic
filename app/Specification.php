<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $fillable = ['id', 'nom_specification'];

    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
}
