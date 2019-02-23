<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=md5($_POST['password']);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "","kiosk");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("kiosk", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from jobs where BINARY password= BINARY'$password' AND BINARY username= BINARY '$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
	// $empid = $rows['emp_id'];
	// $empid = $empid + 1;
$_SESSION['login_user']=$username;
$_SESSION['emp_id']=$row['emp_id']; // Initializing Session
header("location:profile.php"); // Redirecting To Other Page
} else {
$error = "Incorrect Username or Password";

// $error = "<script type='text/javascript'>alert('Invalid Login Credentials');
// window.location.href='index.php';
// </script>";
}
mysql_close($connection); // Closing Connection
}
}
?>