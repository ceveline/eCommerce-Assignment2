<html>
<head>
	<title>Edit Publication</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<div class='container'>
		<form id="main" method='post' action=''>
			<div class="form-group">
				<label>Title:<input type="text" class="form-control" name="publication_title" value="<?=$data->publication_title?>"/></label>
			</div>
			<div class="form-group">
				<textarea form="main" class="form-control" name="publication_text" rows="6"><?=$data->publication_text?></textarea>
			</div>
            <div class="radioBtns">
                <input type="radio" name="publication_status" value="0"><label>Private</label></input>
                <input type="radio" name="publication_status" value="1"><label>Public</label></input>
            </div>
			<div class="form-group">
				<input type="submit" name="action" value="Edit" /> 
				<!-- <a href='/Profile/index'>Cancel</a> (should not be here) -->
			</div>
		</form>
	</div>
</body>
</html>