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
     public function get($key, $default = NULL)
     {
          $option = Option::where('key', '=', $key)->first();
          if ($option) return unserialize($option->value);

          return $default;
     }

     public function set($key, $value)
     {
          $option = Option::firstOrNew(array('key' => $key));
          $option->value = serialize($value);
          $option->save();
     }

     public function delete($key)
     {
          $option = Option::where('key', '=', $key)->first();
          if ($option) $option->delete();
     }

}
