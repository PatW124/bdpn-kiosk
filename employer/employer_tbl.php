<?php
require('session.php');
require('../config.php');
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
.footer {
  overflow: hidden;
  background-color: #AC0409;
  padding: 5px 10px;
}


  input[type=text] {
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

input[type=text]:focus {
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
    <a href="employer_homepage.php">Home</a>
    <a href="employer_form.php">Post a New Job</a>
     <a class="active" id="logout" href="logout.php">Log out</a>
    <!-- <a href="LOGIN/index.php">Login</a> -->
  </div>
</div>

<br>
<br>
<br>

<!-- TABLE DATA FROM DB -->
<h2>List of Jobs you posted</h2>
<br>

<table>
<thead>
  <tr>
    <th style="text-align:center;">Company Name</th>
    <th style="text-align:center;">Email</th>
    <th style="text-align:center;">Address</th>

    <th style="text-align:center;">Contact Number</th>
    <th style="text-align:center;">Job Description</th>
  </tr>
</thead>

  <tbody>
     <!-- should be select all here -->
 <?php  
 $empid=$_SESSION['emp_id'];
 $result= mysql_query("SELECT * from job_details where emp_id='$empid'") or die (mysql_error());
 while ($row= mysql_fetch_array ($result) ){
 // $id=$row['emp_id'];
 ?>
  <tr>
<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['company']; ?>
  
</td>
   <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['email']; ?></td>
    <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['address']; ?></td>
    <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['contactno']; ?></td>
    <td style="text-align:center; word-break:break-all; width:450px;"> <?php echo $row ['joboffer']; ?></td>
  </tr>
 
  <?php } ?>
</tbody>

</table>
<!-- </table> -->
<br/>
<!-- 2nd table -->

        <!-- END -->    

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
