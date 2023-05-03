<!DOCTYPE html>
<html>
<head>
	<title>Success - Form</title>
</head>
<body>
	<h2>Success!</h2>
	<?php
		if(isset($_POST['name'])) {
			echo "Thank you for filling the form, " . $_POST['name'] . ".";
		}
	?>
</body>
</html>