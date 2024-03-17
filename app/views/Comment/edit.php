<form action="/Comment/edit/<?php echo $comment->publication_comment_id; ?>" method="post">
    <label for="comment_text">Edit Comment:</label><br>
    <textarea id="comment_text" name="comment_text" rows="4" cols="50" required><?php echo $comment->comment_text; ?></textarea><br><br>
    <input type="submit" value="Save Changes">
</form>
