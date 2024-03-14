<html>
<head>
	<title>Create Publication</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
	<div class='container'>
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
				<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
			</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
		</div>
</nav> -->

		<form id="main" method='post' action=''>
			<div class="form-group">
				<label>Title:<input type="text" class="form-control" name="publication_title"" /></label>
			</div>

			<div class="form-group">
			<textarea id="publication_text" form="main" class="form-control" name="publication_text" rows="6" maxlength="255" placeholder="Type your content here"></textarea>
			</div>

            <div class="radioBtns">
                <input type="radio" name="publication_status" value="0"><label>Private</label></input>
                <input type="radio" name="publication_status" value="1"><label>Public</label></input>
            </div>
			<div class="form-group">
				<input id="btn" type="submit" name="action" value="Publish" />
			</div>
		</form>
	</div>




</body>
</html>