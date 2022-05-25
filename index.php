<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');
require_once('model/data-layer.php');
require_once('model/validation.php');

//start session
session_start();

$f3 = Base::instance();

$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');

});

//personal info route
$f3->route('GET|POST /create', function ($f3){
    //check for errors
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
     //   var_dump($_POST);

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];

        $validName = validName($firstName, $lastName);
        $validAge = validAge($age);
        $validPhone = validPhone($phone);

        if ($validName && $validPhone && $validAge){
            header('location: profile');
        } else {
            if (!$validName) {
                $f3->set('errors["lastName"]', 'Please enter a valid first and last name');
            }
            if (!$validAge) {
                $f3->set('errors["age"]', 'Must be 18 or older to sign up');
            }
            if (!$validPhone) {
                $f3->set('errors["phone"]', 'Phone number must be 10 digits');
            }
        }
        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];
        $_SESSION['age'] = $_POST['age'];
        if ($_POST['gender'] != null || $_POST['gender'] != " "){
            $_SESSION['gender'] = $_POST['gender'];
        }
        $_SESSION['phone'] = $_POST['phone'];



    }
        $view = new Template();
        echo $view->render ('views/personInfo.html');
    });

//route to profile
$f3->route('GET|POST /profile', function ($f3){
  // var_dump($_POST);

    $email = $_POST['email'];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $validEmail = validEmail($email);
        if ($validEmail){
            header('location: interests');
        } else {
            $f3->set('errors["email"]', 'Please enter valid email');
        }
    }

    $_SESSION['email'] = $_POST['email'];
    $_SESSION['seeking'] = $_POST['seeking'];
    $_SESSION['state'] = $_POST['state'];
    if ($_POST['aboutMe'] != null || $_POST['aboutMe'] != " "){
        $_SESSION['aboutMe'] = $_POST['aboutMe'];
    }

        $view = new Template();
   echo  $view->render('views/profile.html');
});

//route to interests
$f3->route('GET|POST /interests', function ($f3){
 //  var_dump($_POST);

    $f3->set('indoorInterest', getIndoor());
    $f3->set('outdoorInterest', getOutdoor());
    $interests = $_POST['interests'];

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (validIndoor($_POST['interests']) && validOutdoor($_POST['interests'])){
            header('location: summary');
        } else {
            $f3->set('errors["interests"]', 'Not valid');
        }
    }
    $view = new Template();
    echo  $view->render('views/interests.html');
});

//route to summary
$f3->route('GET|POST /summary', function (){

 //   var_dump($_POST);
    $interests = $_POST['interests'];


        $_SESSION['interests'] = $interests;

    $view = new Template();
    echo  $view->render('views/profileSummary.php');
});




$f3->run();
