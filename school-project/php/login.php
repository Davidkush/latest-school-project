<?php 

// Connect to the database
$db = new mysqli('localhost', 'username', 'password', 'database');

// Get the form data
$email= $_POST['email'];
$password = $_POST['password'];

// Hash the password for security
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Select the user's record from the database
$query = "SELECT * FROM users WHERE email='$email' AND password='$password_hash'";
$result = mysqli_query($db, $query);

// If the SELECT query returns a record, the login is successful
if (mysqli_num_rows($result) == 1) {
  // Start a session and store the user's information in the session data
  session_start();
  $_SESSION['logged_in'] = true;
  $_SESSION['username'] = $username;

  // Redirect the user to the protected page
  header('Location:/HTML/homepage.html');
  die;
} else {
  // The login is not successful, display an error message
  echo "Invalid login";
}
?>


