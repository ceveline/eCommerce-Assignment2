<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>My Publications</title>
</head>
<body>
    <div class="container">
        <h1>My Publications</h1>
        <a href="/Publication/create" class="btn btn-primary">Create a new publication</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($publications as $pub): ?>
                    <tr>
                        <td><?php echo $pub->publication_title; ?></td>
                        <td>
                            <a href="/Publication/edit?id=<?php echo $pub->publication_id; ?>" class="btn btn-primary">Edit</a>
                            <a href="/Publication/delete?id=<?php echo $pub->publication_id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
