<?php
/**
*MyClass2
*
* Provide a description of the class here
*/

class MyClass2{

	
	/**
*Method Name: factory
*
*Method description:
*@access public
*@pEm cois
*@return MyClass returns a new instance of MyClass.
*
*/
	
	public function __construct(){
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}//end __construct()
	
	
	/**
*Method Name: factory
*
*Method description:
*@access public
*@pEm cois
*@return MyClass returns a new instance of MyClass.
*
*/
	public function __destruct(){
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}

}