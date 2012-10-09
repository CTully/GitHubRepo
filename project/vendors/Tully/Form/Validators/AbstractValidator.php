<?php

/*
* fileName: AbstractValidator.php
* NameSpace: Tully
* Purpose:
* Created: 09/10/12
* Revisions:
*/

namespace Tully
{
	class AbstractValidator
	{
		defined('IN_LIBRARY') or exit;
	 //class variables
	 protected static $_has_validator =false;
	 protected static $_is_valid=false
	 protected static $_messages = Message(); //is this how you make it into this class?
	
	public static function __construct(FormField)
	{
	
	}//end __construct()
	
	public static function _is_valid()
	{
	
	return false;
	}//end _is_valid();
	
	public static function messages()
	{
	
	return message();
	}//end messages
	
	public static function validate()
	{
	
	return false;
	}//end validate()
	
	}//end class AbstractValidator



}//end namespace Tully