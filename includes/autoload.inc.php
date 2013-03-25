<?php
/**
 * Autoload Classes
 *
 * Copyright (c) 2009 Joseph Bergantine  
 *
 * Author: Joseph Bergantine  <jbergantine@gmail.com>                             
 *
 *
 * @author     Joseph Bergantine <jbergantine@gmail.com>
 * @copyright  2009 Joseph Bergantine
 * @license	   Creative Commons Attribution-Share Alike 3.0 United States License <http://creativecommons.org/licenses/by-sa/3.0/us/>
 * @version    $Id: autoload.inc.php 8 2009-11-01 20:15:13Z jbergantine $
 */

/**
 * Autoload
 * 
 * modification to __autoload() function, specifically to reference the Classes used by this library which exist in the lib directory
 * 
 * the layout of this library is as follows:
 *	+ includes
 * 	++ autoload.inc.php <-- YOU ARE HERE
 *  ...
 * 	+ lib
 * 	++ $class.php <-- THE CLASS FILE WE WANT TO AUTOLOAD
 * 
 * @access public
 */
function __autoload($class) {
	$path = dirname(__FILE__) . '/../lib/'; 
	require_once($path . $class . '.php');
}
