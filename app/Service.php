<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [ 'name', 'description', 'image', 'is_private'];
    
    public function files()
    {
        return $this->hasMany('App\ServiceFile');
    }

    public function change_privacity()
    {
    	return $this->attributes['is_private'] = !$this->is_private;
    }
}
