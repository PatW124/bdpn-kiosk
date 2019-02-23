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
  <link rel="stylesheet" type="text/css" href="w3school.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>


.contact-form
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            height: 500px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0,0,0,.8);
        }
        .avatar {
            position: absolute;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            top: calc(-80px/2);
            left: calc(50% - 40px);
        }
        .contact-form h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }
        .contact-form p
        {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }
        .contact-form input
        {
            width: 100%;
            margin-bottom: 20px;
        }
        .contact-form input[type="text"],
        .contact-form input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .contact-form input[type="submit"] {
            height: 45px;
            color: #fff;
            font-size: 15px;
            background: red;
            cursor: pointer;
            border-radius: 25px;
            border: none;
            outline: none;
            margin-top: 15%;
        }
        .contact-form a
        {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }
</style>
</head>
<body background="ICONS/login.jpg">

<div class="header">
  <a href="index.php" class="logo"><img src="ICONS/DPNS.png"></a>
  <div class="header-right">
    <a  href="../index.php">Home</a>
   
    <a href="../job_posts.php">Job Post</a>
  </div>
</div>

<br>
<br>

<div class="contact-form">
       <!--  <img src="2.jpg" class="avatar"> -->
        <h2>Employer Log-in</h2>
        <form action="" method="post">
            <p>Username</p>
            <input id="name" type="text" name="username" placeholder="Enter Username" required>
            <p>Password</p>
            <input id="password" type="password" name="password" placeholder="Enter Password" required>
             <center>
        	<span style="color:#FF0000;"><?php echo $error; ?></span>
        </center>
            <input name="submit" type="submit" value="Login">
            <br/>
                <center>
                    <span style="color:#d3d3d3;" >NEW EMPLOYER? <a href="employer_register.php">SIGN-UP</a></span>
                </center>
        </form>
    </div>



<!-- <div class="footer">
  <div class="font-color">
  <h5>(c) Job Kiosk Researched and developed by Patrick Carlos - Jordan Visagas - Rocel Canilao - Lineth Lorenzo</h5>
</div>
</div> -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
