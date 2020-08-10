<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spe_classe extends Model
{
    public function classe()
    {
        return $this->hasOne('App\Classe');
    }
}
