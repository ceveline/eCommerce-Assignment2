<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <a class="navbar-brand" href="/Publication/index">eCommerce Assignment 2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Publication/index"><i class="bi bi-list"></i> Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Profile/index"><i class="bi bi-person"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <?php
                            if (isset($_SESSION['user_id'])) {
                                echo '<a class="nav-link" href="/User/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>';
                            } else {
                                echo '<a class="nav-link" href="/User/login"><i class="bi bi-box-arrow-right"></i> Login</a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Z1nag3r+hmdQ9ZQJ5CMyeGXaXPeosBSwIujzU5dXuwEJvQZUuWrVTQc9L8KqeaQc" crossorigin="anonymous"></script>
</body>
</html>
