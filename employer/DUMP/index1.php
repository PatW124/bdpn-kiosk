<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link href="assets/bootstrap.css" rel="stylesheet" id="bootstrap-css">
  <link href="assets/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="log.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="header">
  <a href="index.php" class="logo"><img src="ICONS/DPNS.png"></a>
  <div class="header-right">
    <a  href="index.php">Home</a>
    <a  href="contact.php">Contact</a>
    <a class="active" href="index.php">Log In</a>
  </div>
</div>

<br>
<br>
<!-- <br>
<br>
<br> -->
<div class="container">
  <form action="" method="post">

    <div class="row">
      <h2 style="text-align:center">Employer Log-in</h2>  
      <div class="col">
        <input id="name" type="text" name="username" placeholder="Username" required>
        <input id="password" type="password" name="password" placeholder="Password" required>
        <input name="submit" type="submit" value="Login">

      </div>
    </div>
    <span><?php echo $error; ?></span>
  </form>
</div>

</body>
</html>
