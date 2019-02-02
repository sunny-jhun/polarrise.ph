<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
		'code',
		'name',
		'symbol'
	];

	public function country()
    {
        return $this->belongsToMany('App\User');
    }

}
