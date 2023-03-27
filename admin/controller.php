<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();
$db = new mysqli($host, $username, $password, $dbname);

// Get email address from form submission
$email = $_POST['email'];

// Query database for user with matching email
$result = $db->query("SELECT id, username FROM adminlogin WHERE email = '$email'");

if ($result->num_rows > 0) {
    // User found, generate reset token
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
    $username = $row['username'];
    $token = bin2hex(random_bytes(32));
    $expires = time() + (60 * 60);

    // Save token and expiration time to database for the user
    $db->query("UPDATE adminlogin SET token = '$token', expiration_time = '$expires' WHERE id = '$user_id'");

    // Send password reset email
    $reset_url = "reset_password.php?token=$token";
    $subject = "Password reset for $username";
    $message = "Dear $username,\n\nTo reset your password, click the following link:\n\n$reset_url\n\nThis link will expire in 1 hour.\n\nIf you did not request a password reset, please ignore this email.";
    mail($email, $subject, $message);

    // Display success message
    echo "An email has been sent to $email with instructions for resetting your password.";
} else {
    // User not found, display error message
    echo "Sorry, we couldn't find a user with that email address.";
}
?>