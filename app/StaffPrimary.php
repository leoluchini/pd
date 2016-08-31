<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffPrimary extends Staff
{
	protected static $singleTableType = 'primary';

	protected $fillable = ['full_name', 'degree', 'image','description', 'email', 'linkedin'];

	protected $dates = ['created_at', 'updated_at'];

}