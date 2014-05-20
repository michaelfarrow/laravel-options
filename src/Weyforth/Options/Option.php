<?php

namespace Weyforth\Options;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('created_at', 'updated_at');
	protected $guarded = array('created_at', 'updated_at');

}