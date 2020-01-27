<?php
//THIS IS OUR CONTROLLER
//Turn on error reporting
ini_set("display_errors",1);
error_reporting(E_ALL);


//require the autoload file
require_once ("vendor/autoload.php");


//create an instance of the base class (fat free frame work
//Instantiate F3
$f3 = Base::instance();

//Define a default route
$f3->route('GET /' , function (){
    echo "<h1> Welcome</h1>";
});

//MAKE SURE YOU RUN IT

$f3->run();