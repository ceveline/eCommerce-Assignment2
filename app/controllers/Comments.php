<?php

namespace app\controllers;

use app\core\Controller;
use app\models\PublicationComment;
use app\filters\Login;
use app\filters\HasProfile;

class Comments extends Controller
{

    #[Login]
    #[HasProfile]
    public function index()
    {
        $commentModel = new PublicationComment();
        $comments = $commentModel->getCommentsByProfile($_SESSION['profile_id']);
        $this->view('Comment/index', ['comments' => $comments]);
    }

    #[Login]
    #[HasProfile]
    public function add($publication_id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $commentModel = new PublicationComment();
            $commentModel->profile_id = $_SESSION['profile_id'];
            $commentModel->publication_id = $publication_id;
            $commentModel->comment_text = $_POST['comment_text'];
            $commentModel->save();
            header("location:/Publication/view/{$publication_id}");
        } else {
            // Redirect or display error
        }
    }

    #[Login]
    #[HasProfile]
    public function edit($comment_id)
    {
        $commentModel = new PublicationComment();
        $comment = $commentModel->getCommentById($comment_id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $comment->comment_text = $_POST['comment_text'];
            $comment->update();
            header("location:/Publication/view/{$comment->publication_id}");
        } else {
            $this->view('Comment/edit', ['comment' => $comment]);
        }
    }

    #[Login]
    #[HasProfile]
    public function delete($comment_id)
    {
        $commentModel = new PublicationComment();
        $comment = $commentModel->getCommentById($comment_id);
        $publication_id = $comment->publication_id;
        $comment->delete();
        header("location:/Publication/view/{$publication_id}");
    }
}
