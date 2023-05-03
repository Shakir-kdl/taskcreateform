<!DOCTYPE html>
<html>
<head>
	<title>Page 1 - Form</title>
</head>
<body>
	<h2>Page 1</h2>
	<form action="page2.php" method="POST">
		<label for="name">Name:</label><br>
		<input type="text" id="name" name="name" required><br>
		<label for="phone">Phone number:</label><br>
		<input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br>
		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email" required><br><br>
		<input type="submit" value="Next">
	</form>
</body>
</html>