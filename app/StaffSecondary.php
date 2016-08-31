<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffSecondary extends Staff
{
	protected static $singleTableType = 'secondary';

	protected $fillable = ['full_name', 'degree', 'description'];

	protected $dates = ['created_at', 'updated_at'];

}
