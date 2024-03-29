<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modify Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	<div class="container mt-5">
		<h1>Modify Profile</h1>
		<form method="post" action="">
			<div class="mb-3">
				<label for="first_name" class="form-label">First name:</label>
				<input type="text" class="form-control" id="first_name" name="first_name" value="<?= $data->first_name ?>">
			</div>
			<div class="mb-3">
				<label for="middle_name" class="form-label">Middle name:</label>
				<input type="text" class="form-control" id="middle_name" name="middle_name" value="<?= $data->middle_name ?>">
			</div>
			<div class="mb-3">
				<label for="last_name" class="form-label">Last name:</label>
				<input type="text" class="form-control" id="last_name" name="last_name" value="<?= $data->last_name ?>">
			</div>
			<button type="submit" class="btn btn-primary" name="action" value="Save Profile">Save Profile</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>