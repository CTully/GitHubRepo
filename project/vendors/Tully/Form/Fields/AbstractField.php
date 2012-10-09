<?php

/*
* fileName: AbstractField.php
* NameSpace: Tully
* Purpose:
* Created: 09/10/12
* Revisions:
*/

namespace Tully
{

/*
* Class: Form
* NameSpace: Tully
* Purpose:
* Created: 09/10/12
* Revisions:
*/
	class AbstractField extends Object
	{
		defined('IN_LIBRARY') or exit;
		//class variables
		protected static $_form = Form;
		protected static $_validators = AbstractValidator();
		protected static $_processors = AbstractProcessor();
		protected static $_is_valid = false;
		protected static $_has_errors = false;
		protected static $_messages = Message();
		protected static $_label = Label;
		protected static $_default_value;
		protected static $_value;
		protected static $_processed_value;
		
		
		// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public function __construct($_form)
		{
		
		}//end __construct()
	
		// Function: validate()
		// Returns:
		// Accepts:
		// Access:
		public static function validate()
		{
		
		return false;
		}//end validate()
	
		// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public static function process()
		{
		
		}//end process()
	
		// Function: render()
		// Returns:
		// Accepts:
		// Access:
		//Q.~~~~~~~~~Is this correct? Copy and pasted from View.php
		   final public function render($return = false)
        {
            /* Has the view been rendered? If so, handle the return or print of them */
            if( $this->has_rendered() )
            {
                if( !$return )
                {
                    print $this->_contents;
                    return;
                }
                
                return $this->_contents;
            }//end render()
		
			// Function: label()
		// Returns:
		// Accepts:
		// Access:
		public static function label()
		{
		}
		
			// Function: __construct()
		// Returns:
		// Accepts: String 
		// Access:
		public static function description($_desc = null)
		{
		
		}
		
			// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
	public static function name( $_name = null)
	{
	
	}//end name()
	
			// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public static function id( $_id = null)
		{
		
		}//end id()
	
			// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public static function type()
		{
		
		}//end type()
		
				// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
		public static function  is_required($_required = null)
		{
		
		}//end is_required()
		
		
	
	}//end class AbstractField



}//end namespace Tully