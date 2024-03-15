<?php

namespace app\models;

use PDO;

class Publication extends \app\core\Model {
    public $publication_id;
    public $profile_id;
    public $publication_title;
    public $publication_text;
    public $timestamp;
    public $publication_status;
    //insert
    public function insert() {
        //statement 
        $SQL = 'INSERT INTO publication(profile_id,publication_title,publication_text,timestamp,publication_status) VALUE (:profile_id,:publication_title,:publication_text,:timestamp,:publication_status)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(
            ['profile_id'=>$this->profile_id,
            'publication_title'=>$this->publication_title,
            'publication_text'=>$this->publication_text,
            'timestamp'=>$this->timestamp,
            'publication_status'=>$this->publication_status,
            ]
        );
    }

    //read:
    public function getProfilePublication() { //join the tables to get the names as well for tge post cards (view)
        $SQL = 'SELECT profile.profile_id, profile.first_name, profile.middle_name, profile.last_name, 
        publication.publication_title, publication.publication_text, publication.publication_status, publication.timestamp
        FROM publication
        JOIN profile ON profile.profile_id=publication.profile_id
        WHERE publication.publication_status = 1;';
        
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();
    
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');
        return $STMT->fetchAll();
    }

    public function getAll() {
        $SQL = 'SELECT * FROM publication WHERE publication_status = 1';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');//set the type of data returned by fetches
		return $STMT->fetchAll();
    }

    public function get($profile_id) {
        $SQL = 'SELECT * FROM publication WHERE profile_id = :profile_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['profile_id'=>$profile_id]);
    
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');
        return $STMT->fetchAll();
    }

    public function getById($publication_id) {
        $SQL = 'SELECT * FROM publication WHERE publication_id = :publication_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_id'=>$publication_id]);
    
        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');
        return $STMT->fetch();
    }
    

    public function getByTitle($publication_title) {
        $SQL = 'SELECT * FROM publication WHERE publication_title = :publication_title';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_title'=>$publication_title]);

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');//set the type of data returned by fetches
		return $STMT->fetchAll();
    }

    public function getByContent($publication_text) {
        $SQL = 'SELECT * FROM publication WHERE publication_text = :publication_text';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_text'=>$publication_text]);

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');//set the type of data returned by fetches
		return $STMT->fetchAll();
    }

    //update
    public function update($publication_id) {
        $SQL = 'UPDATE publication SET publication_title=:publication_title,
                    publication_text=:publication_text,
                    publication_status=:publication_status 
                    WHERE publication_id = :publication_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'publication_id'=>$publication_id,
            'publication_title'=>$this->publication_title,
            'publication_text'=>$this->publication_text,
            'publication_status'=>$this->publication_status
        ]);
    }
    
    //delete
    public function delete($publication_id) {
        $SQL = 'DELETE FROM publication WHERE publication_id = :publication_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['publication_id'=> $publication_id] //no
		);
    }
    

    
}