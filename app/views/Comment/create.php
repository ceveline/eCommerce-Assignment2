<form action="/Comment/add/<?php echo $publication_id; ?>" method="post">
    <label for="comment_text">Comment:</label><br>
    <textarea id="comment_text" name="comment_text" rows="4" cols="50" required></textarea><br><br>
    <input type="submit" value="Add Comment">
</form>
