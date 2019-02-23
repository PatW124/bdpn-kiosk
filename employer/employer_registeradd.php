<?php
// require('session.php');
require('../config.php');



									$username= $_POST['username'];
									$password= $_POST['password'];
									$firstname= $_POST['firstname'];
									$middle_initial= $_POST['middle_initial'];
									$lastname= $_POST['lastname'];
									$email= $_POST['email'];
									$contactno= $_POST['contactno'];
									$address= $_POST['address'];
									$country= $_POST['country'];
									// $description= $_POST['description'];
									$company= $_POST['company'];
									
						// mysql_query("select * from jobs ")or die(mysql_error());

						mysql_query("insert into job_details (fname,mi,lname,email,contactno,address,country,company) 
						values('$firstname','$middle_initial','$lastname','$email','$contactno','$address','$country','$company')")or die(mysql_error());
									
						mysql_query("insert into jobs (username,password) 
						values('$username',MD5('$password'))")or die(mysql_error());

									mysql_close($connection);

									echo "<script type='text/javascript'>alert('Registrattion complete!');
											window.location.href='index.php';
											</script>";


									// header('Location:index.php');
?>