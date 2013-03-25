<?php
/**
 * Autoload
 * 
 * modification to __autoload() function, specifically to reference the Classes used by this library which exist in the lib directory
 * 
 * the layout of this library is as follows:
 *	|-- includes
 * 	    |-- autoload.inc.php <-- YOU ARE HERE
 *  ...
 * 	|-- lib
 * 	    |-- $class.php <-- THE CLASS FILE WE WANT TO AUTOLOAD
 * 
 * @access public
 */
function __autoload($class) {
	$path = dirname(__FILE__) . '/../lib/'; 
	require_once($path . $class . '.php');
}
