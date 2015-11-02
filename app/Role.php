<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = ['id', 'description'];

	public $timestamps = false;
}
