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

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];


            if (isset($_POST['premium'])){
                $member = new PremiumMember();
            } else {
                $member = new Member();

            }

            if (Validation::validName($firstName, $lastName)){
                $member->setFirstName($firstName);
                $member->setLastName($lastName);
            } else {
                $this->_f3->set('errors["lastName"]', 'Invalid Name');
            }

            if (Validation::validAge($age)){
                $member->setAge('userAge', $age);
            } else {
                $this->_f3->set('errors[age]','Invalid age range');
            }

            if (Validation::validPhone($phone)){
                $member->setPhone($phone);
            } else {
                $this->_f3->set('errors[phone]', 'Invalid phone');
            }

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

        $member = $_SESSION['member'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $state = $_POST['state'];
            $seeking = $_POST['seeking'];
            $bio = $_POST['bio'];

            if (Validation::validEmail($email)){
                $member->setEmail($email);
            } else {
                $this->_f3->set('errors[email]', 'Invalid email');
            }
            $member->setState($state);
            $member->setSeeking($seeking);
            $member->setBio($bio);

            $_SESSION['member'] = $member;

            if (empty($this->_f3->get('errors'))){
                if ($member instanceof PremiumMember){
                    header('location: interests');
                } else {
                    header('location: summary');

                }
            }

        }
        var_dump($_POST);
        $view = new Template();
        echo $view->render('views/profile.html');
    }

    /*
     * Displays interests page
     */
    function interests()
    {
        $view = new Template();
        echo $view->render('views/interests.html');

    }


}