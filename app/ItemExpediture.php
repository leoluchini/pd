<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemExpediture extends Model
{
    protected $fillable = ['name'];

    public function entity()
    {
        return  $this->belongsTo('App\Entity');
    }
    
    public function organizations()
    {
        return $this->hasMany('App\Organization');
    }
}