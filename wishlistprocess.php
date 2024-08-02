<?php
include ("connection.php");

$a = $_GET['myid'];
$b = $_GET['imgename'];
$c = $_GET['pn'];
$d = $_GET['price'];
$f = $_GET['vender'];
$e = $_GET['size'];


echo $a;
echo $b;
echo $c;
echo $d;
echo $e;

$sql = "insert into wishlist(id,image_name,product_name,price,vender,size) values('$a','$b','$c','$d','$e','$f')";
$result = mysqli_query($conn,$sql);
if ($result) {
    header('location:show_wishlist_product.php');
}
else {
    echo "not insert because this product allerady exist";
}

?>