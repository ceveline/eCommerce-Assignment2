<?php

namespace app\models;

use PDO;

class Profile extends \app\core\Model {
    public $profile_id;
    public $user_id;
    public $first_name;
    public $middle_name;
    public $last_name;

    //create
    public function insert() {
            $SQL = 'INSERT INTO profile(user_id,first_name,middle_name,last_name) VALUE (:user_id,:first_name,:middle_name,:last_name)';
            $STMT = self::$_conn->prepare($SQL);
            $STMT->execute(
                ['user_id'=>$this->user_id,
                'first_name'=>$this->first_name,
                'middle_name'=>$this->middle_name,
                'last_name'=>$this->last_name]
            );
        
    }

    public function getAll() { //join the tables
        $SQL = 'SELECT profile.profile_id, profile.first_name, profile.middle_name, profile.last_name, 
        publication.publication_title, publication.publication_text
        FROM publication
        JOIN profile ON profile.profile_id=publication.profile_id;'; // Modify the join condition according to your database schema
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
    
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');
        return $STMT->fetchAll();
    }

    //read
	public function getForUser($user_id){
		$SQL = 'SELECT * FROM profile WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);

		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
		return $STMT->fetch();
	}

    //update, to edit the profile
    public function update(){
		$SQL = 'UPDATE profile SET first_name=:first_name,middle_name=:middle_name,last_name=:last_name WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id,
			'first_name'=>$this->first_name,
			'middle_name'=>$this->middle_name,
			'last_name'=>$this->last_name]
		);
	}

}