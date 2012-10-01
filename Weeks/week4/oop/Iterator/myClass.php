<?php
class MyClass
{
	public $var1 = 'VALUE 1';
	public $var2 = 'VALUE 2';
	public $var3 = 'VALUE 3';
	
	protected $protectedVar ='Protected Variable';
	private $privateVar = 'Privated Variable';
	
	
	/* Function: IterateVisible()
	*Accepts: N/A
	*Returns: N/A
	*Purpose: To show the example of iteration
	*/
	function iterateVisible(){
	
	echo "MyClass:: IterateVisible:\n";
		foreach($this as $key => $value)
		{
		 print "$key => $Value\n";
		}//end foreach
	}
}