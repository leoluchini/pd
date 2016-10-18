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
    
    public function programs()
    {
        return $this->hasMany('App\Program');
    }
}