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

    private $f3;

    /*
     * Controller constructor
     */
    function __construct($f3)
    {
    $this->$f3 =$f3;
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
        //check if user has selected to be a premium member
        if (isset($_POST['premium'])){
            $user = new PremiumMember();
        } else {
            $user = new Member();
        }

        //set if premium
        $this->f3->set('premiumUser', $_POST['premium']);

        //check if form is submitted
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //store values into user
             $user->setFirstName($_POST['firstName']);
             $user->setLastName($_POST['lastName']);
             $user->setAge($_POST['age']);
             $user->setPhone($_POST['phone']);
             $user->setGender($_POST['gender']);

             $userFirstName = $_POST['firstName'];
             $userLastName = $_POST['lastName'];
             $userAge = $_POST['lastName'];
             $userPhone = $_POST['phone'];
             $userGender = $_POST['gender'];

             //validate name, age, and phone
            if (Validation::validName($userFirstName, $userLastName)){
                $user->setFirstName($userFirstName);
                $user->setLastName($userLastName);
            } else {
                $this->set('errors["lastName"]', 'Please enter a valid name');

            }

            if (Validation::validAge($userAge)){
                $user->setAge($userAge);
            } else {
                $this->set('errors["age"]', 'Please enter a valid age');
            }

            if (Validation::validPhone($userPhone)){
                $user->setAge($userPhone);
            } else {
                $this->set('errors["phone"]', 'Please enter 10 digits');
            }

            //set gender for user
            $user->setGender($userGender);
            $_SESSION['user'] = $user;

            //check if no errors
            if (empty($this->f3->get('errors'))){
                header('location: profile');
            }

            //add data to hive
            $this->f3->set('userFirst', $user->getFirstName());
            $this->f3->set('userLast', $user->getLastName());
            $this->f3->set('userAge', $user->getAge());
            $this->f3->set('userPhone', $user->getPhone());
            $this->f3->set('gen', $user->getGender());

            //display next page
            $view = new Template();
            echo $view->render ('views/personInfo.html');

        }

        }

    /*
     * Displays profile page
     */
    function profile()
    {
        //retrieve user and variables
        $user = $_SESSION['user'];
        $user->setEmail("");
        $user->setState("");
        $user->setSeeking("");
        $user->setBio("");

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            //validate email entered
            $userEmail = $_POST['email'];
            if (DataValidation::validEmail($userEmail)){
                $user->setEmail($userEmail);
            } else {
                $this->f3->set('errors["email"]', 'Email is invalid');
            }

            $user->setState($_POST['state']);
            $user->setState($_POST['bio']);
            $user->setState($_POST['seeking']);

            //check if user is premium
            if ($user instanceof PremiumMember){
                header('location: interests');
            } else {
                header('location: summary');
            }
        }
        $this->f3->set('email', $user->getEmail());
        $this->f3->set('state', $user->getState());
        $this->f3->set('seeking', $user->getSeeking());
        $this->f3->set('bio', $user->getBio());

        $view = new Template();

    }

    /*
     * Displays interests page
     */
    function interests()
    {

    }

    /*
     * Displays summary page
     */
    function summary()
    {

    }

}