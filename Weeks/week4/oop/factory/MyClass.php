<?php
/**
*MyClass
*
* Provide a description of the class here
*/
//We should be able to call myClass: Create by making it extend Factory (with no params)
class MyClass extends Factory{
/**
*Method Name: factory
*
*Method description:
*@access public
*@pEm cois
*@return MyClass returns a new instance of MyClass.
*
*/
	final public static function factory(){
		print __METHOD__ . '::' . __LINE__ . '<br />';
		return new MyClass();
	}//end factory()
	
	/**
*Method Name: factory
*
*Method description Constructor Method
*@access protected
*@pEm cois
*@return creates the class specific object
*
*/
	
	protected function __construct(){
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}//end __construct()
	
	
	/**
*Method Name: factory
*
*Method description: Desctuctor method
*@access public
*@pEm cois
*@return 
*
*/
	public function __destruct(){
		print __METHOD__ . '::' . __LINE__ . '<br />';
	}

}