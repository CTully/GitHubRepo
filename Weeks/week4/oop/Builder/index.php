<?php
ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'myClasses.php';
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
  