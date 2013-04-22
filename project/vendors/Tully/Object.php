//Author: Chris Tully
//Basic class creation practice.


<?php
/**
 * Tully
 */
namespace Tully
{
    /**
     * @ignore
     */
    defined('IN_LIBRARY') or exit;
    
    /**
     * Name:Object
     */
    class Object
    {
	/*
	*name:_toString()
	*purpose: Returns a instance of the object class as a string. 
	*/
        final public function __toString()
        {
            return $this->toString();
        }
        
	/*
	*name:_toString()
	*purpose: Returns a formated instance of the object class as a string.
	*/		
        public function toString()
        {
            return sprintf('%1$s [%2$s]', get_class($this), spl_object_hash($this));
        }
    }
}
