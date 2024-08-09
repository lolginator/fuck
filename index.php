<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0" > -->
	<link rel="stylesheet" href="style.css">
	<title>uniMail</title>
</head>
<body>
	<form action="mail.php" method="POST">


		<input type="text" name = "username" placeholder = "username" maxlength = "25" required>

		<input type="password" name = "password" placeholder="password" maxlength="25" required>

		<input type="submit" value="Отправить письмо">

	</form>

</body>
</html>