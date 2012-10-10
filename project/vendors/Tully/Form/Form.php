<?php

/*
* fileName: Form.php
* NameSpace: Tully
* Purpose:
* Created: 09/10/12
* Revisions:
*/

namespace Tully{


	class Form extends Object
	{
		defined('IN_LIBRARY') or exit;
	
	//protected class variables
	//not sure if this part is correct or not
		protected  $_fields = array();
		protected  $_processed_fields;
		protected  $_messages;
		protected  $_is_processed = false;
		protected  $_event_handlers = AbstractFields();
		
	// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		
		public static function factory()
		{
		
		
		return Form;
		}
		// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public function __construct()
		{
			
		}
		
		// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public static function attachField($_fields)
		{
		
		}
		
		// Function: detachFields()
		// Returns:
		// Accepts:
		// Access:
		public static function detachFields($_fields)
		{
		
			return false;
		
		}
		// Function: render()
		// Returns: a string
		// Accepts: N/A
		// Access: public
		public static render()
		{
		
		return $string;
		}
		
		// Function: attachEventHandler()
		// Returns:
		// Accepts:
		// Access:
		//Q.~~~~~Is this correct?
		public static function attachEventHandler($_event_handlers)
		{
		
		}
		
		// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public static detachEventHandler(FormEventHandler)
		{
		
		}
	
	// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		protected static function fireEvent($string)
		{
		
		}
		
		// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		protected static function process()
		{
		
		}
	

	}
}