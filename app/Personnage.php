<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    protected $fillable = ['id', 'pseudo','id_user', 'id_armure', 'id_race', 'id_classe', 'id_specification'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function armure()
    {
        return $this->hasMany('App\Armure');
    }
    public function race()
    {
        return $this->hasMany('App\Race');
    }
    public function classe()
    {
        return $this->hasMany('App\Classe');
    }
    public function specification()
    {
        return $this->hasMany('App\Specification');
    }
}
