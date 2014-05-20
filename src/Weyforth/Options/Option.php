<?php

namespace Weyforth\Options;

class Option extends Eloquent {
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('created_at', 'updated_at');
	protected $guarded = array('created_at', 'updated_at');

}