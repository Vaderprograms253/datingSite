<?php
/**
 * Controller.php
 * Xavier Denson
 * 05/23/2022
 *
 * This class is the controller for the dating site
 */
class Controller
{

    private $_f3;

    /*
     * Controller constructor
     */
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /*
     * displays home page
     */
    function homePage()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /*
     * Displays personal info page
     */
    function personalInfo()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            var_dump($_POST);
            if (isset($_POST['premium'])){
                $member = new Member();
            } else {
                $member = new PremiumMember();
            }

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            if (Validation::validName($firstName, $lastName)){
                $member->setFirstName($firstName);
                $member->setLastName($lastName);
            } else {
                $this->_f3->set('errors["lastName"]', 'Invalid Name');
            }

            $age = $_POST['age'];
            if (Validation::validAge($age)){
                $member->setAge('userAge', $age);
            } else {
                $this->_f3->set('errors[age]','Invalid age range');
            }

            $phone = $_POST['phone'];
            if (Validation::validPhone($phone)){
                $member->setPhone($phone);
            } else {
                $this->_f3->set('errors[phone]', 'Invalid phone');
            }

            $gender = $_POST['gender'];
            $member->setGender($gender);

            $_SESSION['member'] = $member;

            if (empty($this->_f3->get('errors'))) {
                header('location: profile');
            }

            }

        $view = new Template();
        echo $view->render('views/personInfo.html');

    }

    /*
     * Displays profile page
     */
    function profile()
    {
        var_dump($_POST);
        $view = new Template();
        echo $view->render('views/profile.html');
    }

    /*
     * Displays interests page
     */
    function interests($f3)
    {
        $view = new Template();
        echo $view->render('views/interests.html');

    }


}