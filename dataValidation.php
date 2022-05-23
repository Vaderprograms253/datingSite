<?php

$firstName = $lastName = $age = $gender = $phoneNumber = $email = $indoor = $outdoor = "";
$firstNameErr = $lastNameErr = $ageErr = $genderErr = $phoneNumberErr = $emailErr = $indoorErr = $outdoorErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //validate name
    if (empty($_POST["firstName"])){
        $firstNameErr = "First name required";
    } else {
        $firstName = input_data($_POST["firstName"]);
    }
}