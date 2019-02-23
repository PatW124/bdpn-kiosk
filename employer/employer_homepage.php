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
<title>Job Search</title>
<style>

.font-color{
  color: #FFFFFF;
}
.footer {
  overflow: hidden;
  background-color: #AC0409;
  padding: 5px 10px;
}
/*  input[type=text] {
  width: 165px;
  box-sizing: border-box;
  border: 5px solid #00FFFF;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('ICONS/search.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;
}
*/
.searchbar[type=text]{
width: 165px;
  box-sizing: border-box;
  border: 5px solid #0000ff;
  border-radius: 10px;
  font-size: 30px;
  background-color: white;
  background-image: url('ICONS/search.png');
  background-position: 5px 25px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;

  /*width: 90%;*/
}

.searchbar[type=text]:focus {
  width: 90%;

}

div.a {
  font-size: 100px;
}

div.b {
  font-size: 30px;
}

.centered-element {
  height: 100px;
  width: 100px;
  position: absolute;
  left: 30%;
  margin-left: -50px;
  top: 50%;
  margin-top: -50px;
}


.fontfrost{
  font-size: 50px;
  margin-top: 15px;
  margin-bottom: 15px;
  color: black;
}
.fontfrostbox > *{
  display: inline-block;
  width: 200px;
}
</style>

</head>
<body>

<div class="header">
  <a href="employer_homepage.php" class="logo"><img src="ICONS/DPNS.png"></a>
  <div class="header-right">
    <a href="employer_jobposts.php">Job Post</a>
     <a class="active" href="profile.php">My Page</a>
    <!-- <a href="LOGIN/index.php">Login</a> -->
  </div>
</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="ICONS/start.png" alt="Los Angeles" style="width:100%;">
        <!-- <div class="carousel-content">
        <p>TEST</p>
      </div> -->
      </div>

      <div class="item">
        <img src="ICONS/hiring1.jpg" alt="Chicago" style="width:100%;">
      </div>
    
    <!--   <div class="item">
        <img src="ICONS/hiring3.png" alt="Chicago" style="width:100%;">
      </div> -->

      <div class="item">
        <img src="ICONS/hiring2.png" alt="Chicago" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- slider -->

<div class="centered-element">
<div class="mainPitch" style="position:absolute; top:40px;">
      <div class="container">
        <div class="row">
          <div class="col-xs-6" style="text-align:center;">


            

          </div>
        </div>
      </div>
</div>
</div>
</form>
<!-- slider end -->
</div>



<br>
<br>
<div class="center">
  <div class="a">
  Find Jobs Here!
  </div>
 <!--  <br/>
<center>
<input name="searchbox" class="searchbar" type="text" size="80" placeholder="Search Here!" />
</center>
<br/> -->
<input type="button" value="CLICK HERE!">
  <div class="b">
  <p>Hindi mo na kailangan lumayo pa! Gamitin ang machine na ito para makahanap ng trabaho!</p>
  </div>
</div>


<br>
<br>
<br>
<br>


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
