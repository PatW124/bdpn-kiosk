<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <link href="assets/bootstrap.css" rel="stylesheet" id="bootstrap-css">
  <link href="assets/font-awesome.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/style.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style>
.footer {
  overflow: hidden;
  background-color: #AC0409;
  padding: 5px 10px;
}
</style>
</head>


<body>
<div class="header">
  <a href="index.php" class="logo"><img src="ICONS/DPNS.png"></a>
  <div class="header-right">
    <a href="">Welcome <?php echo $login_session; ?></a>
    <a  href="employer_homepage.php">Homepage</a>
    <!-- <a  href="../index.php">Home</a> -->
    <a  href="employer_tbl.php">My Jobs</a>
    <a class="active" id="logout" href="logout.php" onclick="return confirm('Are you sure to logout?');">Log out</a>
  </div>
</div>

<br>

<div class="center">
  
  <img src="ICONS/headbusiness.jpg" width= 90% height=10%>
  
</div>
</div>


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