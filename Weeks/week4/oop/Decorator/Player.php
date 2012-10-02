<?php
/*
*Class: Player
*Purpose: To create a player object to be manuiplated.
*/

class Player
{
	/**
*Method Name: __construct
*
*Method description: Constructor method
*@access public
*@return N.A This is a constructor.
*
*/
 public $Data=array();
 
	public function __construct(array $info)
	{
	
		$this -> Data = $info;	
	}
}