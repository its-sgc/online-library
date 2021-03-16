<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="slider_insert.php" method="post" enctype="multipart/form-data">
		<p>
			<h3>
				Slider Titile
			</h3>
			<input type="text" name="slider_title">
		</p>
		<p>
			<h3>
				Slider Details
			</h3>
			<textarea rows="10" cols="50" name="slider_details"></textarea>
		</p>
		<p>
			<h3>
				Slider Image
			</h3>
			<input type="file" name="slider_image">
		</p>
		<p>
			
			<input type="submit" name="btn_submit" value="save">
		</p>
		
	</form>
</body>
</html>