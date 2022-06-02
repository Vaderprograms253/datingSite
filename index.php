<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');


//start session
session_start();

$f3 = Base::instance();
$con = new Controller($f3);


$f3->route('GET /', function () {
    $GLOBALS['con']->homePage();
});

$f3->route('GET|POST /create', function (){
   $GLOBALS['con']->personalInfo();
});

$f3->route('GET|POST /profile', function() {
    $GLOBALS['con']->profile();
});

$f3->route('GET|POST /interests', function () {
    $GLOBALS['con']->interests();
});




$f3->run();
