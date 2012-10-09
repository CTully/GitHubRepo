<?php

/*
* Class: AbstractProcessor
* NameSpace: Tully
* Purpose:
* Created: 
* Revisions:
*/

namespace Tully {

	class AbstractProcessor extends Object
	{
	defined('IN_LIBRARY') or exit;

		//protected class variables
		//not sure if this part is correct or not
		protected $_field = AbstractField();

		// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public function __construct($_field)
		{

		}

		// Function: update()
		// Returns:
		// Accepts:
		// Access:
		public static function process($return = false)
		{

		}

	}
}