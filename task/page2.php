<!DOCTYPE html>
<html>
<head>
	<title>Page 2 - Form</title>
</head>
<body>
	<h2>Page 2</h2>
	<form action="success.php" method="POST">
		<label for="location">Location:</label><br>
		<input type="text" id="location" name="location" required><br>
		<label for="age">Age:</label><br>
		<input type="number" id="age" name="age" required><br>
		<label for="university">University:</label><br>
		<input type="text" id="university" name="university" required><br><br>
		<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
		<input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
		<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
		<input type="submit" value="Submit">
	</form>
</body>
</html>