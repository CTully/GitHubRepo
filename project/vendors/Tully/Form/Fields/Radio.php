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

	class Radio extends AbstractField
	{
	
	
		protected $_fields = array(); //this will become a abstract Fields array?
		protected $_text;
		protected $_description;
		protected $_view;
	
		// Function: __construct()
		// Returns: A instance of the Radio Class.
		// Accepts:the Fields Array
		// Access: Public	
	public function __construct($_field)
	{
	parent::__construct($_field);
	}//end construct
	

	

		// Function: update()
		// Returns:
		// Accepts:
		// Access:
		public static function update()
		{
			if()
			{
			return true;
			}
			else
			return false;
		
		}

		// Function: render()
		// Returns: a rendered 
		// Accepts: a boolean value
		// Access: public static 
		public static function render($_return = false)
	    {
		   if( empty($this->$_text) ) 
		   {
			return $_return = false;
			}
			return $_return = true;
	
		}



		// Function: toString()
		// Returns: something as a string value to the message function turning it true?
		// Accepts: N/A
		// Access:	public
			
			final public function toString()
        {
            return $this->message(true);
        }
		}


	}
}
	
	}


}