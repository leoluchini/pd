<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
        
    protected $fillable = ['name'];
    
    public function organizations()
    {
        return $this->hasMany('App\Organization');
    }

    public function itemExpediture()
    {
        return  $this->belongsTo('App\ItemExpediture');
    }
}
