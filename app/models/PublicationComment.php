<?php

namespace app\models;

use PDO;

class PublicationComment extends \app\core\Model
{
    public $publication_comment_id;
    public $profile_id;
    public $publication_id;
    public $comment_text;
    public $timestamp;

    public function save()
    {
        $SQL = 'INSERT INTO publication_comment(profile_id, publication_id, comment_text) VALUES (:profile_id, :publication_id, :comment_text)';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'profile_id' => $this->profile_id,
            'publication_id' => $this->publication_id,
            'comment_text' => $this->comment_text
        ]);
    }

    public function update()
    {
        $SQL = 'UPDATE publication_comment SET comment_text = :comment_text WHERE publication_comment_id = :publication_comment_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute([
            'comment_text' => $this->comment_text,
            'publication_comment_id' => $this->publication_comment_id
        ]);
    }

    public function delete()
    {
        $SQL = 'DELETE FROM publication_comment WHERE publication_comment_id = :publication_comment_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_comment_id' => $this->publication_comment_id]);
    }

    public function getCommentById($comment_id)
    {
        $SQL = 'SELECT * FROM publication_comment WHERE publication_comment_id = :publication_comment_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['publication_comment_id' => $comment_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\PublicationComment');
        return $STMT->fetch();
    }

    public function getCommentsByProfile($profile_id)
    {
        $SQL = 'SELECT * FROM publication_comment WHERE profile_id = :profile_id';
        $STMT = self::$_conn->prepare($SQL);
        $STMT->execute(['profile_id' => $profile_id]);
        $STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\PublicationComment');
        return $STMT->fetchAll();
    }
}
