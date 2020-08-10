<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function personnage()
    {
        return $this->hasMany('App\Personnage');
    }
}
