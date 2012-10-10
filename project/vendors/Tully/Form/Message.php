<?php

/*
* Class: Form
* NameSpace: Tully
* Purpose:
* Created: 09/10/12
* Revisions:
*/

defined('IN_LIBRARY') or exit;
namespace Tully
{
	class Message 
	{
		
	//class variables
	private $_type = 0;
	private $_message = '';
	private $_view = null;
	
	// Function: __construct()
		// Returns:
		// Accepts:
		// Access:
	public static function __construct(int $_id, string $_name)
	{
	
	}

// Function: __construct()
		// Returns:
		// Accepts:
		// Access:	
	public function message(string $_msg=null)
	{
		
	
	
	}
	
	// Function: __construct()
		// Returns:
		// Accepts:
		// Access:	
	public function type(int $_identifier=null)
	{
	
	}
	
	//not sure about this one if it's correct or not (copied from View)
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
            }
			
			// Function: __construct()
		// Returns:
		// Accepts:
		// Access:	
			
			final public function toString()
        {
            return $this->message(true);
        }
			
}