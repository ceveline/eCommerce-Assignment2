<html>
<head>
	<title>Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<div class='container'>
		<div class="profile">
			<a href='/Profile/modify'>Modify my profile</a> | <a href='/User/logout'>Logout</a>
			<h1>My profile</h1>
			<dl>
			<dt>First name:</dt>
			<dd><?= $data->first_name ?></dd>
			<dt>Middle name:</dt>
			<dd><?= $data->middle_name ?></dd>
			<dt>Last name:</dt>
			<dd><?= $data->last_name ?></dd>
			</dl>
		</div>
		<div class="publications">
			<h1>My Publications</h1>
			<!-- create a foreach loop to display all the data from db of this user's publications-->
			<a href="">Create a new publication</a>
		</div>
		<div class="comments">
			<h1>My Comments</h1>
			<!-- create a foreach loop to display all the data from db of this user's comments-->
		</div>
			

	</div>
</body>
</html>