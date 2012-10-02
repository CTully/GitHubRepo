<?php
/**
*Class Name: HTMLPageDirector
*
*Class description: The director for the page constructors
*
*/
class HTMLPageDirector extends AbstractPageDirector {
    private $builder = NULL;
	/**
*Method Name: __construct
*
*Method description: Constructor method
*@access public
*Accepts: A object of type AbstractPageBuilder
*/
    public function __construct(AbstractPageBuilder $builder_in) {
	     $this->builder = $builder_in;
    }
	/**
*Method Name: buildPage
*
*Method description: Calls all the set*() methods and establishes their string variables
*@access public
*@return N.A This is a constructor.
*
*/
    public function buildPage() {
      $this->builder->setTitle('Testing the HTMLPage');
      $this->builder->setHeading('Testing the HTMLPage');
      $this->builder->setText('Testing, testing, testing!');
      $this->builder->setText('Testing, testing, testing, or!');
      $this->builder->setText('Testing, testing, testing, more!');
      $this->builder->formatPage();
    }
	/**
*Method Name: getPage()
*
*Method description: finds out what page is being worked on.
*@access public
*@return the current page.
*
*/
    public function getPage() {
      return $this->builder->getPage();
    }
}