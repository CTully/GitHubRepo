<?php
/**
*Class Name: HTMLPageBuiler 
*
*Class description: Creates the page by calling the builder methods
*
*/
class HTMLPageBuilder extends AbstractPageBuilder {
    
	private $page = NULL;
	/**
*Method Name: __construct
*
*Method description: Constructor method
*@access public
*@return N.A This is a constructor.
*
*/
    function __construct() {
      $this->page = new HTMLPage();
    }
	/**
*Method Name: setTitle()
*
*Method description: Creates the title
*@access public
*Accepts: The page title to be changed
*@return N/A
*
*/
    function setTitle($title_in) {
      $this->page->setTitle($title_in);
    }
	/**
*Method Name: setHeading()
*
*Method description: sets the a HEading of a page
*@access public
*Accepts: The heading to be changed.
*@return N.A
*
*/
    function setHeading($heading_in) {
      $this->page->setHeading($heading_in);
    }
	/**
*Method Name: setText()
*
*Method description:  sets the text of a page
*@access public
*@return N.A 
*
*/
    function setText($text_in) {
      $this->page->setText($text_in);
    }
	/**
*Method Name: formatPage
*
*Method description: calls the formatPageMethod
*@access public
*@return N.A 
*
*/
    function formatPage() {
      $this->page->formatPage();
    }
	/**
*Method Name: getPage()
*
*Method description: Gets the Current Page
*@access public
*@return the current Page
*
*/
    function getPage() {
      return $this->page;
    }
}