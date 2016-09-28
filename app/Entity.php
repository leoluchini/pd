<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = ['name'];

    public function itemExpeditures()
    {
        return $this->hasMany('App\ItemExpediture');
    }
}
