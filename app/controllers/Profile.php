<?php
namespace app\controllers;

#[\app\filters\Login] //to make sure there's a session going on
class Profile extends \app\core\Controller {
    
    #[\app\filters\HasProfile]
    public function index(){
		$profile = new \app\models\Profile();
		$profile = $profile->getForUser($_SESSION['user_id']);

		$this->view('Profile/index',$profile);
	}

    //create a profile, insertion to the database
    public function create() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $profile = new \app\models\Profile();

            //populate
            $profile->user_id = $_SESSION['user_id']; //get from the session
            $profile->first_name = $_POST['first_name'];
            $profile->middle_name = $_POST['middle_name'];
            $profile->last_name = $_POST['last_name'];

            //insert to DB
            $profile->insert();

            //redirect
            header('location:/Profile/index');

        }
        else {
            $this->view('Profile/create');
        }
    }

    //update profile
    public function modify() {
        $profile = new \app\models\Profile();
		$profile = $profile->getForUser($_SESSION['user_id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $profile->first_name = $_POST['first_name'];
            $profile->middle_name = $_POST['middle_name'];
            $profile->last_name = $_POST['last_name'];

            //update to DB
            $profile->update();

            header('location:/Profile/index');
        }
        else {
			$this->view('Profile/modify', $profile);
		}
    }
}