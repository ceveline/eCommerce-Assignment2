<?php
namespace app\models;

use PDO;

class User extends \app\core\Model {
    public $user_id;
    public $username;
    public $password_hash;

    // implement CRUD operation for User

    //insert -> Create
    public function insert() {
        //statement
        $SQL = 'INSERT INTO user (username, password_hash) VALUES (:username, :password_hash)';

        //prepare statement
        $STMT = self::$_conn->prepare(SQL);

        //execute the statement
        $data = ['username'=> $this->username, 
                'password_hash'=> $this->password_hash];
        
        $STMT->execute($data);
    }

    //getById -> Read
    public function getById($user_id) {
        //statement
        $SQL = 'SELECT * FROM user WHERE user_id = :user_id';

        //prepare statement
        $STMT = self::$_conn->prepare(SQL);

        //execute the statement
        $data = ['user_id'=> $user_id];
        
        $STMT->execute($data);

        //fetch the data
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        
        return $STMT->fetch();
    }

    //getByUsername -> Read
    public function getByUsername($username) {
        //statement
        $SQL = 'SELECT * FROM user WHERE username = :username';

        //prepare statement
        $STMT = self::$_conn->prepare(SQL);

        //execute the statement
        $data = ['username'=> $username];
        
        $STMT->execute($data);

        //fetch the data
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');
        
        return $STMT->fetch();
    }

    //update -> not asked for the assignment


}