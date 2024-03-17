<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Main</title>
</head>

<body>
    <div class="container">

        <h1><?php echo $publication->publication_title; ?></h1>

        <?php if (isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $publication->profile_id) : ?>
            <div class="edit-delete-buttons">
                <a href="/Publication/edit?id=<?php echo $publication->publication_id; ?>">Edit</a>
                <a href="/Publication/delete?id=<?php echo $publication->publication_id; ?>">Delete</a>
            </div>
        <?php endif; ?>
        <table class="table">

            <body>

                <div class="card">
                    <div class="text">
                        <p><?= $publication->publication_text; ?></p>
                    </div>
                    <div class="author">
                        <p>By <?= $publication->first_name ?> <?= $publication->middle_name ?> <?= $publication->last_name; ?></p>
                    </div>
                    <div class="timestamp">
                        <p>Created on <?= $publication->timestamp ?></p>
                    </div>
                    <div>
                        <p>Publication Status: <?php echo ($publication->publication_status == 1) ? 'Public' : 'Private'; ?></p>
                    </div>
                </div>

                <h3>Comments</h3>

                <?php foreach ($comments as $comment) : ?>
                    <div>
                        <p><?php echo $comment->comment_text; ?></p>
                        <p>Commented by: <?php echo $comment->first_name . ' ' . $comment->last_name; ?></p>
                        <?php if (isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $comment->profile_id) : ?>
                            <a href="/Comment/edit/<?php echo $comment->publication_comment_id; ?>">Edit</a>
                            <a href="/Comment/delete/<?php echo $comment->publication_comment_id; ?>">Delete</a>
                        <?php endif; ?>
                    </div>
                    <hr>
                <?php endforeach; ?>

                <?php if (isset($_SESSION['profile_id'])) : ?>
                    <h3>Add Comment</h3>
                    <form action="/Comment/add/<?php echo $publication->publication_id; ?>" method="post">
                        <label for="comment_text">Your Comment:</label><br>
                        <textarea id="comment_text" name="comment_text" rows="4" cols="50" required></textarea><br><br>
                        <input type="submit" value="Add Comment">
                    </form>
                <?php else : ?>
                    <p>Please <a href="/User/login">login</a> to add comments.</p>
                <?php endif; ?>
            </body>
        </table>
    </div>
</body>

</html>