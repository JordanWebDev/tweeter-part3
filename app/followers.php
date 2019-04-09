<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class followers extends Model
{
    public function followers(){
        return $this->hasMany('App\follwers');
    }
}
