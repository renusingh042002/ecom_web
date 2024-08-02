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
         include ("../connection.php");

    // delete ke ander jo id variable liya he id ko save karane ke lye ushka variable name dena he get me
    $id = $_GET['sachin'];
    $query = "DELETE FROM product_table WHERE id = '$id' ";
    $data = mysqli_query($conn,$query);
    
    if ($data) {
        echo "<script>alert('Record Delete')</script>";
        //  echo "reocrd delete";
         ?>
    
        <meta http-equiv = "refresh" content = "1; url = http://localhost:3000/ADMIN/Show_Data.php" />
        <?php 
    }
    else {
        echo "<script>alert('Record Not Delete')</script>";
    }
    ?>
</body>
</html>