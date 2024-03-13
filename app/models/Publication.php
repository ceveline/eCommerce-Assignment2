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

    public function getAll() {
        $SQL = 'SELECT * FROM publication';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute();

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');//set the type of data returned by fetches
		return $STMT->fetch();
    }

    public function getByTitle($publication_title) {
        $SQL = 'SELECT * FROM publication WHERE publication_title = :publication_title';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_title'=>$publication_title]);

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');//set the type of data returned by fetches
		return $STMT->fetch();
    }

    public function getByContent($publication_text) {
        $SQL = 'SELECT * FROM publication WHERE publication_text = :publication_text';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_text'=>$publication_text]);

        $STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Publication');//set the type of data returned by fetches
		return $STMT->fetch();
    }

    //update

    public function update() {
        $SQL = 'UPDATE publication SET publication_title=:publication_title,
                    publication_text=:publication_text,
                    publication_status=:publication_status 
                    WHERE publication_id = :publication_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'publication_title'=>$this->publication_title,
            'publication_text'=$this->publication_text,
            'publication_status'=$this->publication_status
        ]);
    }
    
    //delete
    publication function delete() {
        $SQL = 'DELETE FROM profile WHERE publication_id = :publication_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['publication_id'=>$this->publication_id]
		);
    }

    
}