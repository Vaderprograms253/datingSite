<?php
/*
 * Author: Xavier Denson
 * Date: 6/04/2022
 * Validation.php
 * This class holds functions for validation
 */
class Validation
{

    /*
     * required
     * checks all strings are alphabetic
     */
    static function validName($firstName, $lastName){
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
    static function validAge($age){
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
    static function validPhone($phone){
        if(preg_match('/^[0-9]{10}+$/', $phone)) {
            return true;
        } else {
            return false;
        }
    }


    static function validEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }

    /*
     * checks each selected outdoor
     */
    static function validOutdoor($interests){
        $validOutdoor = DataLayer::getOutdoor();
        foreach ($interests as $interest) {
            if (!in_array($interest, $validOutdoor)) {
                return false;
            }
        }
        return true;
    }
    /*
     * checks each selected indoor
     */
    static function validIndoor($interests){
        $validIndoor = DataLayer::getIndoor();
        foreach ($interests as $interest) {
            if (!in_array($interest, $validIndoor)) {
                return false;
            }
        }
        return true;
    }


}