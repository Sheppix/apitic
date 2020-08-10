<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armure extends Model
{
    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
}
