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
	
	/* Function: __construct()
	*Accepts: $array---typeof(int);
	*Returns: ...technically it constructs a new object... but as a return type.. nothing..I think...
	*Purpose: To show the example of iteration
	*/
	public function __construct($array)
	{
		if (is_array($array))
		{
		 $this->var = $array;
		}//end if
	}//end __construct()

	/* Function: rewind()
	*Accepts: n/a
	*Returns: this reset...
	*Purpose: To show the example of iteration
	*/
	public function rewind()
	{
		echo'Rewinding \n';
		reset($this ->var);
	}
	
	/* Function: current()
	*Accepts: N/A
	*Returns: current position
	*Purpose: To show the example of iteration
	*/
	public function current()
	{
	$var = current($this ->var);
	echo "current: $var\n";
	return $var;
	}
	
	/* Function: key()
	*Accepts: N/A
	*Returns: A key..?
	*Purpose: To show the example of iteration
	*/
	public function key()
	{
		$var=key($this->var);
		echo "Key : $var\n";
		return $var;
	}
	
	/* Function: next()
	*Accepts: N/A
	*Returns: the next variable
	*Purpose: To show the example of iteration
	*/
	public function next()
	{
	$var =next($this->var);
	echo "next: $var\n";
	return $var;
	}
	
	/* Function:  valid()
	*Accepts: N/A
	*Returns: establishes a valadity function.
	*Purpose: To show the example of iteration
	*/
	public function valid()
	{
		$key = key($this->var);
		$var = ($key !== NULL && $key !== FALSE);
		echo "valid: $var\n";
		return $var;	
	}
	
}