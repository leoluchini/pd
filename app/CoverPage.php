<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoverPage extends Model
{
	protected $fillable = ['image','title','description', 'orden'];
   
   public static function boot() {
		static::creating( function ($cover_page) {
		  $cover_page->orden = CoverPage::count() + 1;
		});
		parent::boot();
	}
}
