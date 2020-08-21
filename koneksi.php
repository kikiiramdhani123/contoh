<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="praktikum1"; // Database name
// Connect to server and select database.
$conn = mysqli_connect("$host", "$username", "$password")or die("Couldn't connect to MySQL
Server, please check your configuration files.");
mysqli_select_db($conn,$db_name)or die("Connection to MySQL Server has been successfull, but we
couldn't load the database. Please check your configuration files.");
?>