<?php
/**
*Class: Stringer
*purpose: Used in example of Facade
*facade: The facade pattern (or façade pattern) is a software design pattern commonly used with object-oriented 
*programming. The name is by analogy to an architectural facade. -Wikipedia
*
*/
class Stringer
{

/**
*Method Name: __construct()
*
*Method description:constructor method
*@access public
*@accepts: a string var
*@return MyClass returns a new instance of MyClass.
*
*/
	public function __construct($str)
	{
		$this-> str =$str;
		$this -> _AddText($str);
		$this -> _AddDigits();
		$this -> _AddObject(new Stuff);
		echo $this->str;
	}
	
	/**
*Method Name: __AddText()
*
*Method description:adds a string to the accepted variable from constructor
*@access private
*@accepts: a string var
*@return n/a
*/	
	private function _AddText()
	{
		$this->str .= '| Adding Text';
	}
	
	/**
*Method Name: __AddDigits()
*
*Method description:adds a string to the accepted variable from constructor
*@access private
*@accepts: a string var
*@return n/a
*/
	private function _AddDigits()
	{
		$this->str .= '| Adding Digits 402';
	}
	
	/**
*Method Name: __AddObject()
*Method description: takes in a new object, and call the exampleStuff() method.
*@access public
*@accepts: a object of type Stuff
*@return n/a
*/
	public function _AddObject(Stuff $obj)
	{
		$this->str .=  $obj->exampleStuff();
	}
	
	/**
*Method Name: __AddText()
*
*Method description:adds a string to the accepted variable from constructor
*@access private
*@accepts: a string var
*@return n/a
*/
	public function __destruct()
	{
	
	}


}
/**
*Class: Stuff
*purpose: Used in example of Facade
*
*/
class Stuff
{
	/**
*Method Name: exampleStuff()
*
*Method description: returns a a string and the class name.
*@access private
*@accepts: n/a
*@return returns a a string and the class name.
*/
	public function exampleStuff()
	{
		return __CLASS__ . ' | Example stuff';
	} 
}