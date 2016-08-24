<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [ 'name', 'description', 'image', 'is_private', 'orden'];
    
    public static function boot() {
			static::creating( function ($service) {
			  $service->orden = Service::count() + 1;
			});
			parent::boot();
		}
    public function files()
    {
        return $this->hasMany('App\ServiceFile');
    }

    public function change_privacity()
    {
    	return $this->attributes['is_private'] = !$this->is_private;
    }
}
