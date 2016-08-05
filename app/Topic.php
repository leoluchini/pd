<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany('App\Item');
    }

    public function entities()
    {
        return  $this->belongsToMany('App\Entity');
    }
}
