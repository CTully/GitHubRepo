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
		  print "$key => $value\n";
		}//end foreach
	}
	
	
	
	
}


class MyIterator implements Iterator
{
	private $var = array();
	
	public function __construct($array)
	{
		if (is_array($array))
		{
		 $this->var = $array;
		}//end if
	}//end __construct()

	public function rewind()
	{
		echo'Rewinding \n';
		reset($this ->var);
	}
	
	public function current()
	{
	$var = current($this ->var);
	echo "current: $var\n";
	return $var;
	}
	
	public function key()
	{
		$var=key($this->var);
		echo "Key : $var\n";
		return $var;
	}
	
	public function next()
	{
	$var =next($this->var);
	echo "next: $var\n";
	return $var;
	}
	
	public function valid()
	{
		$key = key($this->var);
		$var = ($key !== NULL && $key !== FALSE);
		echo "valid: $var\n";
		return $var;	
	}
	
}