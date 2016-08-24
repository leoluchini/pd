<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $fillable = [ 'name', 'value', 'year', 'orden'];
    
    public static function boot() {
			static::creating( function ($indicator) {
			  $indicator->orden = Indicator::count() + 1;
			});
			parent::boot();
		}
}
