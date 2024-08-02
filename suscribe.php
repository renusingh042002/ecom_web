<?php


// $useremail="sachin.saxena24460@gmail.com";
 if (isset($_POST['sbutton'])) { //suscribe button click
    $useremail = $_POST['eml'];
    if (filter_var($useremail,FILTER_VALIDATE_EMAIL)){
        $subject= "thanks for suscribtion us - sachin and company ";
        $message = "thanks for suscribtion to our blog we always recive new update";
        $sender = "From:sachin.saxena24460@gmail.com";
        if (Mail($useremail,$subject,$message,$sender)) {
            ?>
            <script> alert("thanks for suscription");</script>
          <?php
        }
    }
    else {
         ?>
           <script> alert("invalid email");</script>
         <?php
         
      }
 }
?>