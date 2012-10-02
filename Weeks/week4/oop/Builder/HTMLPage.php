<?php
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