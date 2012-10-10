<?php
defined('IN_LIBRARY') or exit;

/*
* Class: FieldSet
* NameSpace: Tully
* Purpose: 
* Created: 09/10/12
* Revisions:
*/

namespace Tully{

	class FieldSet extends AbstractField
	{
	
	//variables
	//
	
		protected $_field = array();
		protected $_text;
		protected $_description;
		protected $_view;
	
	public function __construct($_field)
	{
	parent::__construct($_field);
	}//end construct
	
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
		public static function update()
		{

		}

		// Function: render()
		// Returns:
		// Accepts:
		// Access:
		public static function render($return = false)
		{

		}


		// Function: toString()
		// Returns:
		// Accepts:
		// Access:	
			
			final public function toString()
        {
            return $this->message(true);
        }
		}


	}
}
	
	}


}