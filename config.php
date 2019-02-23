<?php 
$servername = "sql12.freemysqlhosting.net";
$dbusername = "sql12280266";
$dbpassword = "BCxQf3xpYF";
$dbname = "sql12280266";


$connection = mysqli_connect($servername, $dbusername, $dbpassword);
if (!$conn) {
    die("connection failed: ".mysqli_connect_error());
 }
else {
    $db = mysql_select_db("$dbname", $connection);   
 }
?>







?>
