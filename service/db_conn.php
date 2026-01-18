<?php
//session_start();
$host="silo.cs.indiana.edu"; // Host name 
$username="abc_username"; // Mysql username 
$password="password"; // Mysql password 
$db_name="abc_password"; // Database name                            
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>