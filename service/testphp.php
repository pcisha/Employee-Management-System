<?php
	$email = $_GET['email'];

	$dbc = mysqli_connect('silo.cs.indiana.edu', 'abc_username', 'password', 'abc_password')
    or die('Error connecting to MySQL server.');

  $query = "SELECT EMPLOYEE_ID,SEC_QSTN, SEC_ANS FROM authenticate WHERE EMPLOYEE_ID=$email";

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
	
	$row = $result->fetch_array();

	$output =  array('secques'=>$row['SEC_QSTN'],
                 'secans'=>$row['SEC_ANS'],
				 'employeeid'=>$row['EMPLOYEE_ID']);
	
	echo json_encode($output,JSON_FORCE_OBJECT);
	 
	mysqli_close($dbc);
?>