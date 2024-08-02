<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<style>
body {
    background-color: #d071f9;
}

table {
    background-color: white;
}

img {
    height: 50px;
    width: 100px;
}

.myinput {
    height: 30px;
    border-radius: 5px 5px;
    outline: none;
    /* width: 230px; */
    padding-left:30px;
    /* padding-right:40px; */
    margin-right:10px;
}

.mydiv {
    display: flex;
    justify-content: center;
}

.mybutton {
    background-color: yellow;
    color: black;
    height: 40px;
    width: 80px;
    border-radius: 5px 5px;
    margin-left: 40px;
    font-weight: bold;
    font-size: 16px;
    cursor:pointer;
}

</style>
<link rel="stylesheet" href="../assets/css/vendor.css">
<link rel="stylesheet" href="../assets/css/style.css">

<body>

<?php
     include("../include/navbar.php");

?>

    <?php

include ("../connection.php");
error_reporting(0);
$query  = "SELECT * FROM product_table";
if (isset($_POST['go'])) {
    $querytoserach=$_POST['find'];
    $query="SELECT * FROM product_table where product_name like '%$querytoserach%' ";
}
else {
    $query="select * from product_table ";
}
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if ($total !=0) {

?>




    <h1 Style="text-align:center"><mark>Display All Data</mark></h1>
  
    <div class="mydiv">
        <form method="post">
            <label style="font-size:29px; font-weight:bold;">Search data</label>&nbsp;
            <input type="text" name="find" class="myinput">
            <input type="submit" name="go" class="mybutton">
        </form>
    </div> <br>

    <center>
        <table border="2px" collspacing="7">
            <tr>
                <th>product_name</th>
                <th>product_price</th>
                <th>product_vender</th>
                <th>product_size</th>
                <th>product_category</th>
                <th>product_label</th>
                <th>product_image</th>
                <th>Action</th>



            </tr>

            <?php
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                <td>".$result["product_name"]."</td>
                <td>".$result["price"]."</td>
                <td>".$result["vender"]."</td>
                <td>".$result["size"]."</td>
                <td>".$result["category"]."</td>
                <td>".$result["label"]."</td>";
                $sc = $result['image_name'];
                echo "<td><img src='images/$sc'></td>";
                echo"<td><a href='update.php?id=$result[id]'><input type = 'submit' value='Update'></a>
                <a href='delete.php?id=$result[id]'><input type = 'submit' value='delete' onclick='return fun()'></a>
                </td>
            </tr>";
        }
    }      
    ?>
        </table>
    </center>

</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body{
                background-color:#d071f9;
            }
            table{
                background-color:white;
            }
            img{
                    height:50px;
                    width:100px;
            }
    </style>
<body> -->
<!-- <?php
    //   include ("../connection.php");
    //   error_reporting(0);
    //   $query  = "SELECT * FROM product_table";
    //   $data = mysqli_query($conn,$query);
    //   $total = mysqli_num_rows($data);
    //   if ($total !=0) {
   ?> -->
<!-- <h1 Style="text-align:center"><mark>Display All Data</mark></h1>
        <center><table border="2px" collspacing="7">
            <tr>
                <th>product_name</th>
                <th>product_price</th>
                <th>product_vender</th>
                <th>product_size</th>
                <th>product_category</th>
                <th>product_label</th>
                <th>product_image</th>
                <th>Action</th>



            </tr> -->
<!-- 
     <?php
    //     while ($result = mysqli_fetch_assoc($data)) {
    //         echo "<tr>
    //             <td>".$result["product_name"]."</td>
    //             <td>".$result["price"]."</td>
    //             <td>".$result["vender"]."</td>
    //             <td>".$result["size"]."</td>
    //             <td>".$result["category"]."</td>
    //             <td>".$result["label"]."</td>";
    //             $sc = $result['image_name'];
    //             echo "<td><img src='images/$sc'></td>";
    //             echo"<td><a href='update.php?id=$result[id]'><input type = 'submit' value='Update'></a>
    //             <a href='Delete.php?sachin=$result[id]'><input type = 'submit' value='delete' onclick='return fun()'></a>
    //             </td>
    //         </tr>";
    //     }
    //   }
 
    //   else {
    //     echo "no record found";
    //   }
    ?>
    </table>
</center>
</body>
</html>