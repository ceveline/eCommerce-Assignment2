<?php

namespace app\controllers;

#[\app\filters\Login]
class Publication extends \app\core\Controller {

    #[\app\filters\HasProfile]
    function list() { 
        $publication = new \app\models\Publication();
        $publications = $publication->get($_SESSION['profile_id']);
            
        $this->view('Publication/list', ['publications' => $publications]);
    }
    
    #[\app\filters\HasProfile]
    function create() {
        date_default_timezone_set('America/New_York'); //to make sure the timestamp is EST time

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $publication = new \app\models\Publication();

            $publication->profile_id = $_SESSION['profile_id'];
            $publication->publication_title = $_POST['publication_title'];
            $publication->publication_text = $_POST['publication_text'];
            $publication->timestamp = date('Y-m-d H:i:s'); //fix the hour
            $publication->publication_status = $_POST['publication_status'];

            $publication->insert();

            header('location:/Profile/index');
        }
        else {
            $this->view('Publication/create');
        }
    }

    #[\app\filters\HasProfile]
    function edit() { //when clicking the "edit" button
        date_default_timezone_set('America/New_York'); //to make sure the timestamp is EST time

        $publication_id = $_GET['id']; //get id of the publication from the URL
        $publication = new \app\models\Publication();
        $publication = $publication->getById($publication_id); //get the data of the publication by id

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $publication->publication_title = $_POST['publication_title'];
            $publication->publication_text = $_POST['publication_text'];
            $publication->timestamp = date('Y-m-d H:i:s');
            $publication->publication_status = $_POST['publication_status'];


            $publication->update($publication_id);

            header('location:/Profile/index');
        }
        else {
            $this->view('Publication/edit', $publication);
        }
    
    }

    #[\app\filters\HasProfile]
    function delete() {
        $id = $_GET['id'];
        $publication = new \app\models\Publication();
		$publication->delete($id);

        header('location:/Profile/index');
    }

    
}
