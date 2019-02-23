<?php
// include('session.php');
require('config.php');
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

  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.footer {
  overflow: hidden;
  background-color: #AC0409;
  padding: 5px 10px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>


<body>
<div class="header">
  <a href="index.php" class="logo"><img src="ICONS/DPNS.png"></a>
  <div class="header-right">
    <!-- <a href="">Welcome <?php echo $login_session; ?></a> -->
    <!-- <a  href="../index.php">Home</a> -->
    <a  href="index.php">Home</a>
    <a class="active" id="login" href="profile.php">My Page</a>
  </div>
</div>

<br>

<!-- TABLE DATA FROM DB -->
<!-- <h2>List of Jobs you posted</h2> -->
<center>
<input name="searchbox" class="searchbar" type="text" size="80" placeholder="Search Here!" />
</center>
<br>

<table>
<thead>
  <tr>
    <th style="text-align:center;">Username</th>
    <th style="text-align:center;">Password</th>
    
  </tr>
</thead>

  <tbody>
     <!-- should be select all here -->
      <?php 
 $result= mysql_query("SELECT * from jobs" ) or die (mysql_error());
 while ($row= mysql_fetch_array ($result) ){
 $id=$row['id'];
 ?>
  <tr>
<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['username']; ?>
  
</td>
   <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['password']; ?></td>
  </tr>
  
  <?php } ?>
</tbody>

</table>
<!-- </table> -->
<br/>
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