<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
}
