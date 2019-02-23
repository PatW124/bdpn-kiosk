<?php
// require('session.php');
require('../config.php');
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
<style>
.footer {
  overflow: hidden;
  background-color: #AC0409;
  padding: 5px 10px;
}
  input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 }

input[type=password] {
 width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.a {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 10px;
}
</style>
</head>
<body>

<div class="header">
  <a href="index.php" class="logo"><img src="ICONS/DPNS.png"></a>
  <div class="header-right">
    <a  class="active" href="./index.php">Home</a>
  </div>
</div>

<br>
<br>
<br>
<br>
<br>

<div class="a">
  <form method="post" action="employer_registeradd.php">
  <div class="row" align="center">
      <h2 style="text-align:center">Employer Register</h2>  
    
  <input type="text" name="firstname" placeholder="Firstname" maxlength="30" minlength="3" required="Firstname Required!">
  <br>
  <input type="text" name="middle_initial" placeholder="Middle Initial" maxlength="3"required>
  <br>
  <input type="text" name="lastname" placeholder="Lastname" maxlength="50" minlength="3" required>
  <br>
  <input type="text" name="username" placeholder="Username"  minlength="7" required>
  <br>
  <input type="password" name="password" placeholder="Password" maxlength="30" minlength="7" required>
  <br>
  <input type="email" name="email" placeholder="Email" required>
   <br>
  <input type="text" name="contactno" placeholder="Contact Number" maxlength="30" required>
  <br>
  <input type="text" name="company" placeholder="Company Name" maxlength="30" minlength="10" required>
  <br>
  <input type="text" name="address" placeholder="Company Address" minlength="5" required>
  <br/>
    <select id="country" name="country" required>
      <option value="">Choose your city</option>
      <option value="san fernando">San Fernando</option>
      <option value="angeles">Angeles</option>
      <option value="mexico">Mexico</option>
      <option value="arayat">Arayat</option>
    </select>
<br>
<br>
  <input name="register" type="submit" value="Register">
  <br/>
  <br/>
   <span style="color:#FF6347;" ><a href="../index.php">CANCEL SIGN-UP</a></span>    
</div>
 
</form>
</div>

<!-- footer -->
<div class="footer">
  <div class="font-color">
  <h5>(c) Job Kiosk Researched and developed by Patrick Carlos - Jordan Visagas - Rocel Canilao - Lineth Lorenzo</h5>
</div>
</div>
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
