<?php
   include ("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    if (isset($_POST['submited'])) {
        // include 'connection.php';
        $a = $_POST['pname'];
        $b = $_POST['price'];
        $c = $_POST['myvender'];
        $d = $_POST['mysize'];
        $e = $_POST['mylabel'];
        $f = $_POST['mycata'];
        $file = $_FILES['myfile']['name'];
        $tmpfile = $_FILES['myfile']['tmp_name'];
        $sql = "insert into  product_table (product_name,price,vender,size,label,category,image_name) VALUES('$a','$b','$c','$d','$e','$f','$file')";
        
        $sachin = mysqli_query($conn,$sql);
        // echo "$a","<br>";
        // echo "$file"; 
        if($sachin) {
            if(move_uploaded_file($tmpfile,"images/".$file))
            {
                
                ?>
                <script>alert("product upload");</script>
                
                <meta http-equiv = "refresh" content = "0; url = http://localhost:3000/show_wishlist_product.php" />
                <?php

               
            }
            else
            {
                echo"not upload";
                
            }
        }
        else{
            echo"not insert";
        }
        
    
    }

    //  if (isset($_POST['submited'])) {
    //     include ("../connection.php");
    //     $a = $_POST['pname'];
    //     $b = $_POST['price'];
    //     $c = $_POST['myvender'];
    //     $d = $_POST['mysize'];
    //     $e = $_POST['mylabel'];
    //     $g = $_POST['mycata'];
    //     $file = $_FILES['myfile']['name'];
    //     $tempfile = $_FILES['myfile']['tmp_name'];

    //     $sql = "INSERT INTO product_table VALUES('$a','$b','$c','$d','$e','$g','$file')";
    //     $data = mysqli_query($conn,$sql);

    //     if ($data) {
    //         if (move_uploaded_file($tempfile,"./images/".$file)) {
    //             echo "uploded";
    //         }
    //         else {
    //            echo "not upload";
    //         }
    //     }
    //     else {
    //        echo  "not insert";
    //     }
         

    //  }

    ?>

</body>
</html>