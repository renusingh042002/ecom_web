<?php
include ("connection.php");
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
  <!-- fonts -->
  <script src="https://kit.fontawesome.com/6b129fd467.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    .container{
        display:flex;
        margin-top:70px;
        justify-content:space-between;
        
    }
    .box{
    padding-left:20px;
    
        /* padding-top:20px; */
    }
</style>
<body>

<?php
$sql = "select * from product_table";
if (isset($_POST['applyfilter'])) {
    if ($_POST['order']=="ascending") {
        $sql = "select * from product_table order by price asc";
        $qry = $conn->prepare($sql);
        $qry->execute();
        $table=$qry->get_result();
        $qry->close();
        while($row=$table->fetch_assoc()) {
        // echo "<br>",$row['price'];
        $i = $row["image_name"]; 
        ?>
        

        <div class="container">
            <div class="box">
                    <a href ="product.php?pid=<?php echo $row['id'] ?>"><img src="ADMIN/images/<?php echo $i ?>" alt="" height="350px" width="440px"></a>        
                    <span style="font-weight:bold; font-size:35px; "><?php  echo $row['product_name']; ?> </span>
                    <span style="float:right; font-weight:bold; font-size:35px;"><a href="product.php?pid=<?php echo $row['id'] ?>">Add To Cart</a></span>

            </div>
            <div class="box">
                <!-- <a href ="product.php?pid=<?php echo $row['id'] ?>"><img src="assets/img/products/shoe/<?php echo $i ?>.jpg" alt="" height="350px" width="440px"></a> 
                     -->                  <h2 style="font-weight:bold; text-align:center; color:red; ">PRODUCT DETAILS</h1>
                                          <p style="font-weight:bold; text-align:center; font-size:20px; "><?php  echo $row['price']; ?> <span><del>567<del><span> </p>

                                            <p style="font-weight:bold; text-align:center; font-size:20px; ">Vender:<?php  echo $row['vender']; ?> </p>
                                            <p style="font-weight:bold; text-align:center; font-size:20px; ">Size:<?php  echo $row['size']; ?> </p>
                                            <p style="font-weight:bold; text-align:center; font-size:20px; ">Catagroy:<?php  echo $row['label']; ?>  </p>
           </div>

           <div class="box">
           <h2 style="font-weight:bold; text-align:center; color:red; ">PRODUCT DESCRIPTION</h1>
            <p style="font-size:20px;text-align:center;">ANDUNE Men's Barefoot & Minimalist Shoes - Black Blaze | Wide Toe Box | Zero Drop Sole</p>
            <p style="text-align:center;font-size:20px;"><span>Shape:	Straight<span> <br><span>Shape:	Straight<span><br><span>Brand: SILENT</span><br><span>Hair Type	Fine</span><br><span>Material: Ceramic</span></p>
    

           </div>
        </div>
        
       <?php
        }
        
    }







    else if($_POST['order']=="dascending") {
        $sql = 'select * from product_table order by price desc';
        $qry = $conn->prepare($sql);
        $qry->execute();
        $table=$qry->get_result();
        $qry->close();
        while($row=$table->fetch_assoc()) {
            $i = $row["image_name"];
        ?>
        <div class="container">
            <div class="box">
                    <a href ="product.php?pid=<?php echo $row['id'] ?>"><img src="ADMIN/images/<?php echo $i ?>" alt="" height="350px" width="440px"></a>        
                    <span style="font-weight:bold; font-size:35px; "><?php  echo $row['product_name']; ?> </span>
                    <span style="float:right; font-weight:bold; font-size:35px;"><a href="product.php?pid=<?php echo $row['id'] ?>">Add To Cart</a></span>

            </div>
            <div class="box">
                <!-- <a href ="product.php?pid=<?php echo $row['id'] ?>"><img src="assets/img/products/shoe/<?php echo $i ?>.jpg" alt="" height="350px" width="440px"></a> 
                     -->                  <h2 style="font-weight:bold; text-align:center; color:red; ">PRODUCT DETAILS</h1>
                                          <p style="font-weight:bold; text-align:center; font-size:20px; "><?php  echo $row['price']; ?> <span><del>567<del><span> </p>

                                            <p style="font-weight:bold; text-align:center; font-size:20px; ">Vender:<?php  echo $row['vender']; ?> </p>
                                            <p style="font-weight:bold; text-align:center; font-size:20px; ">Size:<?php  echo $row['size']; ?> </p>
                                            <p style="font-weight:bold; text-align:center; font-size:20px; ">Catagroy:<?php  echo $row['label']; ?>  </p>
           </div>

           <div class="box">
           <h2 style="font-weight:bold; text-align:center; color:red; ">PRODUCT DESCRIPTION</h1>
            <p style="font-size:20px;text-align:center;">ANDUNE Men's Barefoot & Minimalist Shoes - Black Blaze | Wide Toe Box | Zero Drop Sole</p>
            <p style="text-align:center;font-size:20px;"><span>Shape:	Straight<span> <br><span>Shape:	Straight<span><br><span>Brand: SILENT</span><br><span>Hair Type	Fine</span><br><span>Material: Ceramic</span></p>
    

           </div>
        </div>

        <?php
       }
    }
    else {
        ?>
        <script>
        alert("product not available plese select price"); 
        </script>
        <?php
        header('location:gallery.php');
    }

    
}else{
    
    ?>
    <script>
    alert("product not available plese LOGIN After you can Purchase Product"); 
    </script>
    <?php
    header('location:login.php');
}
//     
?>
</body>
</html>