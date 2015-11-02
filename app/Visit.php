<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
	protected $fillable = [
		'member_id',
		'visited_id',
		'month',
		'day',
		'time'
	];
}
