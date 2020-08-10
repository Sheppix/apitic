<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    public function personnage()
    {
        return $this->hasOne('App\Personnage');
    }
}
