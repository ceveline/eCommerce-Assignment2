<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- <meta charset="UTF-8"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <!-- Bootstrap CSS CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <style>
        #icon:hover {
            cursor: pointer;
            color: #D0D0D0;
        }
        #icon {
            font-size: 1.8rem;
            margin-left: 30;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <a class="navbar-brand">eCommerce Assignment 2</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/Main/index">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Main/about_us">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Contact/index">Contact us</a>
                </li>
                <li class="nav-item">
                <a href="/Profile/index"><i id='icon' class="bi bi-person"></i></a>
                </li>
                <li class="nav-item">
                    <a href="/User/logout"><i id='icon' class="bi bi-box-arrow-right"></i><a>
                </li>
                
            </ul>
        </div>
    </nav>
</body>

</html>