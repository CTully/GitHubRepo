<?php

/**
*Class Name: AbstractPageDirector
*Purpose: Calls all the functions inorder to "direct" the page construction
*
*/
abstract class AbstractPageDirector {

/**
*Method Name: __construct
*
*Method description: Constructor method
*@access abstract
*@return N.A This is a constructor.
*Accepts: A abstractPageBuilder object
*/
    abstract function __construct(AbstractPageBuilder $builder_in);
	/**
*Method Name: buildPage()
*
*Method description: builds the Page
*@access abstract
*@return N/A
*
*/
    abstract function buildPage();
	/**
*Method Name: __construct
*
*Method description: Constructor method
*@access public
*@return N.A This is a constructor.
*
*/
    abstract function getPage();
}