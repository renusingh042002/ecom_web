<?php
include 'connection.php';
$sql="INSERT INTO ragister (name,last,email,password) VALUES (?,?,?,?)";
if ($_SERVER['REQUEST_METHOD']=="POST") {
   

    $name = $_POST['uname'];
    $last = $_POST['ulast'];
    $email = $_POST['uemail'];
    $pass = $_POST['upass'];
    
     $qry = $conn->prepare($sql);
     $qry -> bind_param("ssss",$name,$last,$email,$pass);
     $qry->execute();
     header('location:login.php');
     $conn->close();
   
}


?>