<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['name', 'topic_id', 'description'];

    public function topic()
    {
        return $this->belongsTo('App\Entity');
    }
}
