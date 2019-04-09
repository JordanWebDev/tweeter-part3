<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class following extends Model
{
    public function following(){
        return $this->hasMany('App\following');
    }
}
