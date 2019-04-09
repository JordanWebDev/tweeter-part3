<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['name','message'];

    public function post(){
        return $this->belongsTo('App\Tweet');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
