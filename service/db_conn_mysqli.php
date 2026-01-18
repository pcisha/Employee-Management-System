<?php
$con=mysqli_connect("silo.cs.indiana.edu","abc_username","password","abc_password");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
