<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = ['name'];

    public function topics()
    {
        return $this->belongsToMany('App\Topic');
    }
}
