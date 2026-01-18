<?php
	$employeeid = $_GET['employeeid'];
	
	$password = $_GET['password'];
	
	$dbc = mysqli_connect('silo.cs.indiana.edu', 'abc_username', 'password', 'abc_password')
    or die('Error connecting to MySQL server.');

  $query = "UPDATE authenticate SET password='$password' WHERE employee_id='$employeeid'";

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
	
		$output =  array('result'=>$result);
	
	echo json_encode($output,JSON_FORCE_OBJECT);

	mysqli_close($dbc);
?>