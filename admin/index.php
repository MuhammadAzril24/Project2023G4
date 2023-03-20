<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style/login.css">
	<title>Login Page</title>
</head>

<body>
	<form action="validate.php" method="post">
		<div class="login-box">
			<h1 style="color: rgb(32, 201, 151); border-bottom: 4px solid rgb(32, 201, 151);">Login</h1>

			<div class="textbox">
				<i style="color: rgb(32, 201, 151)" class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="username" placeholder="Username" required>
			</div>

			<div class="textbox">
				<i style="color: rgb(32, 201, 151)" class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="password" placeholder="Password" required>
			</div>
				<a href="forgot.php">Forgotten password?</a>

			<input style="color: rgb(255, 255, 255); background: rgb(32, 201, 151);" class="button" type="submit"
					name="login" value="Log In">
		</div>
	</form>
</body>

</html>
