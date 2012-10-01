<?php

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
class Player_Str_Decorate
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
		$this->Player->Data['str'] +=5;
	}


}

class Player_Dex_Decorate
{
/**
*Method Name: __construct
*
*Method description: Constructor method
*@access public
*@return N.A This is a constructor.
*
*/
*/
	public function __construct(Player $p)
	{
		$this->Player = $p;
		
	}
	
		/**
*Method Name: Add()
*
*Method description: Used to increate the players Dex stat
*@access public
*@pEm cois
*@return N/A
*
*/
	public function Add($int)
	{
		$this->Player->Data['dex'] +=$int;
	}

}