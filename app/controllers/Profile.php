<?php
namespace app\controllers;

#[\app\filters\Login] //to make sure there's a session going on
class Profile extends \app\core\Controller {
    
    #[\app\filters\HasProfile]
    public function index(){
		$profile = new \app\models\Profile();
		$profile = $profile->getForUser($_SESSION['user_id']);
        $_SESSION['profile_id'] = $profile->profile_id; //store the profile_id into a session for publication
		$this->view('Profile/index',$profile, true);
        
        $publicationController = new \app\controllers\Publication();
        $publicationController->list();

        $commentsController = new \app\controllers\Comments();
        $commentsController->index();
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

    //read, to use in Publication controller to get the name of the user
    // public function getProfiles() {
    //     $profile = new \app\models\Profile();
    //     $profiles = $profile->getAll();

    //     $this->view('Publication/index', ['profiles' => $profiles]);
    // }

    public function getProfiles() {
        $profile = new \app\models\Profile();
        $profiles = $profile->getAll();

        // Prepare an associative array with profile information
        $profileInfo = [];
        foreach ($profiles as $profile) {
            $profileInfo[$profile->profile_id] = [
                'first_name' => $profile->first_name,
                'middle_name' => $profile->middle_name,
                'last_name' => $profile->last_name
            ];
        }

        return $profileInfo;
    }
}