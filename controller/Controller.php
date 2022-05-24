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
        //check if user has selected to be a premium member
        if (isset($_POST['premium'])){
            $user = new PremiumMember();
        } else {
            $user = new Member();
        }

        //check if form is submitted
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //store values into user
             $user->setFirstName($_POST['firstName']);
             $user->setLastName($_POST['lastName']);
             $user->setAge($_POST['age']);
             $user->setPhone($_POST['phone']);
             $user->setGender($_POST['gender']);
        }

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