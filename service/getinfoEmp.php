<?php
	//$search = $_GET['search'];
	session_start();
	$emppid=$_SESSION['employee_id'];
	$dbc = mysqli_connect('silo.cs.indiana.edu', 'abc_username', 'password', 'abc_password')
    or die('Error connecting to MySQL server.');

  $query = "SELECT * FROM employee WHERE employee_id=$emppid";

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');
	
	$row = $result->fetch_array();
	
	
	$output =  array('employeeid'=>$row['employee_id'],
                 'name'=>$row['name'],
				 'address'=>$row['address'],
				 'phonenumber'=>$row['phone_no'],
				 'email'=>$row['email_id'],
				 'designation'=>$row['designation'],
				 'place'=>$row['location']);
	
	echo json_encode($output,JSON_FORCE_OBJECT);
	mysqli_close($dbc);
?>