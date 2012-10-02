<?php
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

/*
* NOTE: As a result of my poor reading skill's I oringinally had the files workong on
*one index and one classes file, I have since moved every thing. In accou
*/

require_once 'HTMLPage.php';
require_once 'abstractClassBuilder.php';
require_once 'abstractPageBuilder.php';
require_once 'HTMLPage.php';
require_once 'HTMLPageBuilder.php';
require_once 'HTMLPageDirector.php';


 echo 'BEGIN TESTING BUILDER PATTERN';
  writeln('');

  $pageBuilder = new HTMLPageBuilder();
  $pageDirector = new HTMLPageDirector($pageBuilder);
  $pageDirector->buildPage();
  $page = $pageDirector->GetPage();
  writeln($page->showPage());
  writeln('');
 
  writeln('END TESTING BUILDER PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  }
  