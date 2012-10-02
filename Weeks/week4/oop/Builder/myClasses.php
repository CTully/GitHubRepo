<?php

/**
*Class Name: AbstractPageBuilder
* Purpose: Runs the function getPage(), which gets the current page.
*
*
*/
abstract class AbstractPageBuilder {
    abstract function getPage();
}

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

/**
*Classs Name: HTMLPage
*
*Class description:  Sets and builds the current page.
*
*/
class HTMLPage {
    private $page = NULL;
    private $page_title = NULL;
    private $page_heading = NULL;
    private $page_text = NULL;
	/**
*Method Name: __construct
*
*Method description: Constructor method
*@access public
*@return N.A This is a constructor.
*
*/
    function __construct() {
    }
	/**
*Method Name: showPage()
*
*Method description: Constructor method
*@access public
*@returns the current page
*
*/
    function showPage() {
      return $this->page;
    }
	
	/**
*Method Name: setTitle()
*
*Method description: sets the pages title, in html
*@access public
*Accepts: A inputed page title
*@return: N/A
*
*/
    function setTitle($title_in) {
      $this->page_title = $title_in;
    }
	/**
*Method Name: setHeading()
*
*Method description: sets the heading of the current page.
*@access public
*@return N/A
*
*/
    function setHeading($heading_in) {
      $this->page_heading = $heading_in;
    }
	/**
*Method Name: setText()
*
*Method description: sets the text of a page
*@access public
*@return N/A
*
*/
    function setText($text_in) {
      $this->page_text .= $text_in;
    }
	/**
*Method Name: formatPage()
*
*Method description: formats the page to have the necessary HTML coding
*@access public
*@return N/A
*
*/
    function formatPage() {
       $this->page  = '<html>';
       $this->page .= '<head><title>'.$this->page_title.'</title></head>';
       $this->page .= '<body>';
       $this->page .= '<h1>'.$this->page_heading.'</h1>';
       $this->page .= $this->page_text;
       $this->page .= '</body>';
       $this->page .= '</html>';
    }
}
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
/**
*Classs Name: HTMLPageDirector
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