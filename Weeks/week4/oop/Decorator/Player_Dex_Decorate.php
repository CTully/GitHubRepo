<?php
/*
*Class:Player_Dex_Decorate
*Purpose: To show the updating effects of updating a players 'dex' stat via the Decorate design method
*
*/
class Player_Dex_Decorate  extends Player_Decorator
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
	
/**
*Method Name: Add()
*
*Method description:Add method to increate a players 'dex' stat
*@access public
Accepts: A int value with the increate
*@return NA
*/
	public function Add($int)
	{
		$this->Player->Data['dex'] +=$int;
	}

}