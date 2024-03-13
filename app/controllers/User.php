<?php

namespace app\controllers;

class User extends \app\core\Controller {
    //login
    function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $user = new \app\models\User();
            $user = $user->getByUsername($username);

            $password = $_POST['password'];
            if($user && $user->active && password_verify($password, $user->password_hash)) {
                $_SESSION['user_id'] = $user->user_id;

                header('location:/User/home'); //can change the location to something else
            }
            else {
                header('location:/User/login');
            }
        }
        else {
            $this->view('User/login'); //show the login view if user's input is incorrect/doesn't match
        }
    }

    //register
    function register() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new \app\models\User();

            $user->username = $_POST['username'];
            $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
            //insert to database
            $user->insert();
            header('location:/User/login');
        }
        else {
            $this->view('User/registration');
        }
        
    }

    //logout
    function logout() {
        session_destroy();

		header('location:/User/login');
    }
}