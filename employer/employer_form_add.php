<?php
require('session.php');
include('../config.php');




									
									$email = $_POST['email'];
									$contactno = $_POST['contactno'];
									$address = $_POST['address'];
									$country = $_POST['country'];
									$joboffer = $_POST['joboffer'];
									$company = $_POST['company'];

				
									// $empid = $rows['emp_id'];
									// $empid = $empid + 1;

						mysql_query("insert into job_details (email,contactno,address,country,company,joboffer) 
						values('$email','$contactno','$address','$country','$company','$joboffer')")or die(mysql_error());

									mysql_close($connection);

									echo "<script type='text/javascript'>alert('Post New Job complete!');
											window.location.href='employer_jobposts.php';
											</script>";

									// echo "<script type='text/javascript'>alert('Invalid Login Credentials');
									// 		window.location.href='employer_tbl.php';
									// 		</script>";

									// header('Location:employer_tbl.php');


?>