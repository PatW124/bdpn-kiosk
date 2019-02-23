<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
<!-- <div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2> -->
<!-- <form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="password" type="password">
<input name="submit" type="submit" value=" Login "> -->
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


<!-- </form> -->
<!-- </div>
</div> -->
</body>
</html>


