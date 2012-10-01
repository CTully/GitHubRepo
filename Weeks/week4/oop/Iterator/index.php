<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'myClass.php';

$class = new MyClass();

foreach($class as $key =>$value)
{

print "$key =>$value\n";
}

echo "\n";

$class ->iterateVisible();