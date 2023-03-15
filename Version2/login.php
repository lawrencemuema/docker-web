<?php
// Retrieve the values of the "username" and "password" fields from the form submission
$username = $_POST['username'];
$password = $_POST['password'];

// Perform some validation and processing of the submitted data
if ($username == 'admin' && $password == 'admin') {
  // The login was successful
  echo 'Welcome, This is ' . $username . '!';
} else {
  // The login failed
  echo 'Invalid username or password';
}
?>