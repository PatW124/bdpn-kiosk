<?php
session_start();
// {

// //echo "Login Credentials verified";
// echo "<script type='text/javascript'>alert('Are you sure you want to Log out?');
// window.location.href='profile.php';
// </script>";

// }else{
// echo "<script type='text/javascript'>alert('Invalid Login Credentials');
// window.location.href='index.php';
// </script>";
// //echo "Invalid Login Credentials";
// }
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../index.php"); // Redirecting To Home Page
}
?>