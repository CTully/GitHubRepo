<?php
/*
*Class Name: Player_Decorator
*Purpose: To show how a player can be updated through the decorate desin pattern.
*/
abstract class Player_Decorator
{
	abstract public function Add($int);

}
class Player_Str_Decorate extends Player_Decorator
{
	/**
*Method Name: __construct
*
*Method description: Constructor method
*@access public
*@return N.A This is a constructor.
*
*/
	public function __construct(Player $p)
	{
		$this->Player = $p;
		
	}

// Revision:
//Added the  add function to each class to allow for a easier monitoring and useability

/**
*Method Name: Add()
*
*Method description:Add method to increate a players 'str' stat
*@access public
Accepts: A int value with the increate
*@return NA
*/

	public function Add($int)
	{
		$this->Player->Data['str'] +=$int;
	}

}