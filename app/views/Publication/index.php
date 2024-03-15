<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Main</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .card {
            margin-top: 20px;
            margin-bottom: 20px; /* Adds margin below each card */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 5px; /* 5px rounded corners */
            padding: 10px; /* Adds padding inside each card */
        }

        .text {
            font-size: large;
        }

        .timestamp, .author{
            font-size: small;
        }

        
    </style>
</head>
<body>
    <?php include 'app/styles/navbar.php';?>
    <div class="container">
    
        <h1>Publications</h1>
        <a href="/Publication/create" class="btn btn-primary">Create a new publication</a>
        <table class="table">
            <body>
                
                <?php foreach ($publications as $pub): ?>
                    
                    <div class="card">
                        <div class="title">
                            <h3>
                                <a href=""><?php echo $pub->publication_title; ?></a>
                            </h3>
                        </div>
                        <div class="text">
                            <p><?= $pub->publication_text; ?></p>
                        </div>
                        <div class="author">
                            <p>By <?= $pub->first_name?> <?= $pub->middle_name ?> <?= $pub->last_name;?></p>
                        </div>
                        <div class="timestamp">
                            <p>Created on <?= $pub->timestamp?></p>
                        </div>
                        
                        
                    </div>
                <?php endforeach; ?>
            </body>
        </table>
    </div>
</body>
</html>
