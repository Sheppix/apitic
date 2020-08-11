<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id', 'name', 'pseudo', 'id_personnage'];
    public function personnage()
    {
        return $this->hasMany('App\Personnage');
    }
}
