<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $fillable = [
		'fname',
		'lname',
		'phone',
		'email',
		'pwd',
		'role',
		'photo',
		'gender',
		'street',
		'city',
		'zip',
		'state',
		'visited_by',
	];

	public function notes()
	{
		return $this->hasMany('App\Note');
	}

	public function visits()
	{
		return $this->hasMany('App\Visit');
	}

	public function companionship()
	{
		return $this->belongsTo('App\Companionship');
	}
}
