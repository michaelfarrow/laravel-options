<?php
/**
 * Laravel Options Implementation.
 *
 * @author    Mike Farrow <contact@mikefarrow.co.uk>
 * @license   Proprietary/Closed Source
 * @copyright Mike Farrow
 */

namespace Weyforth\Options;

class Options
{

	/**
     * The table to store options.
     *
     * @var $table
     */
	protected $table = 'options';


	/**
     * Get the option.
     *
     * With an optional default value.
     *
     * @param string $name    The option key. 
     * @param mixed $default  The value to return if the option is not found. 
     *
     * @return mixed
     */
	public function get($name, $default = NULL)
	{
		$value = $default;
 		 return $default;
		return unserialize($value);
	}

	public function set($name, $value)
	{

		// serialize($value);
	}

}
