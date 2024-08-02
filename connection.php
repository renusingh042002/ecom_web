<?php
$hostname="localhost";
$username="newuser";
$password="password";
$dbname="php_project";

$conn=new mysqli($hostname,$username,$password,$dbname);


if($conn->connect_error)
{
	die("connection failed");
}
?>