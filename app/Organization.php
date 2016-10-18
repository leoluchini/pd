<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = ['name', 'description', 'benefit_amount_term'];

    public function program()
    {
        return  $this->belongsTo('App\Program');
    }
}
