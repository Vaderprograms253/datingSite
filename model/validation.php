<?php

require_once('model/data-layer.php');

/*
 * required
 * checks all strings are alphabetic
 */
function validName($firstName, $lastName){
    if (empty($_POST["firstName"]) || empty($_POST["lastName"])){
        return false;
    } else {
        return true;
    }
}

/*
* required
* checks age is between 18 and 118
*/
function validAge($age){
    if ($age < 18 || $age > 118){
        return false;
    } else {
        return true;
    }

}

/*
 * required
 * checks to see that phone is valid
 */
function validPhone($phone){
    if(preg_match('/^[0-9]{10}+$/', $phone)) {
        return true;
    } else {
        return false;
    }
}


function validEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

/*
 * checks each selected outdoor
 */
function validOutdoor($interests){
    $validIndoor = DataLayer::getIndoor();
    foreach ($interests as $interest) {
        if (!in_array($interest, $validIndoor)) {
            return false;
        }
    }
    return true;
}
/*
 * checks each selected indoor
 */
function validIndoor($interests){
    $validOutdoor = DataLayer::getOutdoor();
    foreach ($interests as $interest) {
        if (!in_array($interest, $validOutdoor)) {
            return false;
        }
    }
    return true;
}
