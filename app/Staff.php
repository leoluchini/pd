<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;

class Staff extends Model
{
    use SingleTableInheritanceTrait;

  	protected $table = "staff";

  	protected static $singleTableTypeField = 'type';

  	protected static $singleTableSubclasses = [StaffPrimary::class, StaffSecondary::class];

  	public static function boot() {
			static::creating( function ($staff) {
			  $staff->orden = Staff::count() + 1;
			});
			parent::boot();
		}
}
