<?php

include_once('connection.php');

function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["Username"]);
	$password = test_input($_POST["Password"]);
	$stmt = $conn->prepare("SELECT * FROM adminlogin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user["Username"] == $username) &&
			($user["Password"] == $password)) {
				header("location: dashboard.php");
		}
		else {
			echo "<div class='login-box'>
			<h3>Username/password is incorrect.</h3>
			<br/>Click here to <a href='index.php'>Login</a></div>";
				}
		}
}

?>
