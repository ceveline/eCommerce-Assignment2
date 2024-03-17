<html>
<head>
	<title>Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<style>
        .title {
            display: flex;
            align-items: center; /* Align items vertically */
        }

        .title h1 {
            margin-right: 10px; /* Add space between h1 and a */
        }
    </style>
</head>
<body>
	<div class='container'>
		<div class="profile">
			<div class="title">
				<h1>My profile </h1>
				<a href='/Profile/modify'>Modify my profile</a>
			</div>
			<dl>
			<dt>First name:</dt>
			<dd><?= $data->first_name ?></dd>
			<dt>Middle name:</dt>
			<dd><?= $data->middle_name ?></dd>
			<dt>Last name:</dt>
			<dd><?= $data->last_name ?></dd>
			</dl>
		</div>
	</div>
</body>
</html>