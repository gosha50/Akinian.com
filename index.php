<?php

define('DS', DIRECTORY_SEPARATOR);

// load kirby
require(__DIR__ . DS . 'kirby' . DS . 'bootstrap.php');

// check for a custom site.php
if(file_exists(__DIR__ . DS . 'site.php')) {
  require(__DIR__ . DS . 'site.php');
} else {
  $kirby = kirby();
}

// render

//PHP error msg  
echo $kirby->launch();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


//map address variable
 
// $string = $page->Address();
// $string .=  “,”.$page->City();
// $string .=  “,”.$page->State();
// $string .=  “ ”.$page->Zip();

// $newString =  str_replace(‘ ‘, ‘+’, $string)
