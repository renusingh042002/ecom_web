<!-- only password and email varification -->

<?php

$showAlert = false;
$showError=false;
if (isset($_POST['mysave']))
 {
    include 'connection.php';
    $email=$_POST['umail'];
    //  echo$email;
    $password=$_POST['upass'];

    // $sql="SELECT * FROM tbusers where username='$username' AND Password='$password'";  //pehle password verify se
    $sql = "SELECT * FROM ragister where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num>0) {
                    while($row = mysqli_fetch_assoc($result) )
                    {
                        if($password==$row['password']) 
                        {               
                            session_start();
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['email'] = $email;
                            $_SESSION['loggedin'] = true;
                            
                            header("location:http://localhost/php_fill_stack_project/index.php");
                            break;
                        }
                        else
                        {
                           // if password is rong
                            echo "<script language='javascript'>alert('rong password... Back To Login Page and re-write Password  ');</script>";
                        }   
                   }          
            } 
            else 
            {
            //   if email is rong
            echo "<script language='javascript'>alert('rong email... Back To Login Page and re-write');</script>";
            }
}  

?>