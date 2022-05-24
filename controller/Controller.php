<?php
/**
 * Controller.php
 * Xavier Denson
 * 05/23/2022
 *
 * This class is the controller for the dating site
 */
class Controller {

    private $f3;

    /*
     * Controller constructor
     */
    function __construct($f3) {
    $this->$f3 =$f3;
    }

    /*
     * displays home page
     */
    function homePage(){
        $view = new Template();
        echo $view->render('views/home.html');

    }

    /*
     * Displays personal info page
     */
    function personalInfo(){

    }

    /*
     * Displays profile page
     */
    function profile(){

    }

    /*
     * Displays interests page
     */
    function interests(){

    }

    /*
     * Displays summary page
     */
    function summary(){

    }

}