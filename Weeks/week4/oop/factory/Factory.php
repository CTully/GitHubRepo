<?php

abstract class Factory {
	public static function create($class = null) {
		if( !$class ){
		//handle null value here
				print __METHOD__ . '::' . __LINE__ . '<br />';
		$class = get_called_class();
		
		if( $class == 'Factory' ) {
			throw new Exception('Cannon create an instance of the Factory class.');
		}//end inner if
		else{
				print __METHOD__ . '::' . __LINE__ . '<br />';
		}//end else
		
		}//end if
		
		if(!class_exists($class)){
			throw new Exception(sprintf('%1$s does not exist.', $class));
		}//end if
	
		return new $class;
	}//end create()


/**
*Do not allow the instantion of this class. (first example)
*/

//final private function __construct(){}
//final private function __destruct(){}
}