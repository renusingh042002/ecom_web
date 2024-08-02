<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.container{
        display:flex;
        justify-content:center;
    }
    body{
        background-color:#d071f9;
    }
    label{
        font-weight:bold;
        font-size:25px;
    }
    </style>
<body>
<?php 
     include('../connection.php');
     error_reporting(0);
     $id= $_GET['id'];
     $query = "SELECT * FROM product_table where id='$id'";
     $data = mysqli_query($conn, $query);
     $total = mysqli_num_rows($data);
     $result = mysqli_fetch_assoc($data);
     $img=$result['image_name'];
     

?>

<div class="container">
    <div class="box">
    <h1 style="font-size:50px;text-align:center;"><mark>Update PENEL</mark></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label>product name</label>
        <input type="text" placeholder="enter product name" value="<?php echo $result["product_name"] ?>" name="pname" style="padding-left:22px;margin-left:55px;font-size:23px; border-radius:5px 7px;" ><br><br>
        </div>
        <div>
        <label>product price</label>
            <input type="number" placeholder="enter product price" value="<?php echo $result["price"] ?>"  name="price" style="padding-left:22px;margin-left:57px;font-size:23px; border-radius:5px 7px;"><br><br>
        </div>
        <div>
        <label>product vender</label>
            <select name="myvender" style="width:310px;margin-left:39px;font-size:23px; border-radius:5px 7px;">
                <option value="Clothes"
                <?php
                      if ($result['vender'] == 'Clothes') {
                             echo "Selected";
                 }
            ?>                        
                >Clothes</option>


                <option value="Kotten"
                <?php
                      if ($result['vender'] == 'Kotten') {
                             echo "Selected";
                 }
            ?>
                >Kotten</option>


                <option value="Metel"
                <?php
                      if ($result['vender'] == 'Metel') {
                             echo "Selected";
                 }
            ?>  
                >Metel</option>

                <option value="Copper"
                <?php
                      if ($result['vender'] == 'Copper') {
                             echo "Selected";
                 }
            ?>  
                >Copper</option>
                <option value="Gold"
                <?php
                      if ($result['vender'] == 'Gold') {
                             echo "Selected";
                 }
            ?>  
                >Gold</option>

                <option value="Still"
                <?php
                      if ($result['vender'] == 'Still') {
                             echo "Selected";
                 }
            ?>  
                >Still</option>
            </select><br><br>
        </div>
        <div>
        <label>product size</label>
            <input type="number" placeholder="enter product size" value="<?php echo $result["size"] ?>"  name="mysize" style="padding-left:22px;margin-left:70px;font-size:23px; border-radius:5px 7px;" ><br><br>
        </div>
        <div>
        <label>product Label</label>
        <select name="mylabel" style="width:310px;margin-left:49px;font-size:23px; border-radius:5px 7px;"s>
            <option value="popular"
            <?php
                      if ($result['label'] == 'popular') {
                             echo "Selected";
                 }
            ?>
            >popular</option>

            <option value="letest_drop"
            <?php
                      if ($result['label'] == 'letest_drop') {
                             echo "Selected";
                 }
            ?>
            >letest_drop</option>

            <option value="gallery"
            <?php
                      if ($result['label'] == 'gallery') {
                             echo "Selected";
                 }
            ?>
            >gallery</option>
        </select><br><br>
    </div>
    <div>
    <label>product categroy</label>
    <select name="mycata" style="width:310px;margin-left:20px;font-size:23px; border-radius:5px 7px;">
        <option value="Men"
        <?php
                      if ($result['category'] == 'Men') {
                             echo "Selected";
                 }
            ?>
        >Men</option>

        <option value="women"
        <?php
                      if ($result['category'] == 'women') {
                             echo "Selected";
                 }
            ?>
        >women</option>

        <option value="formal"
        <?php
                      if ($result['category'] == 'formal') {
                             echo "Selected";
                 }
            ?>
        >formal</option>
    </select><br><br>
</div>
<div>
<label>product image</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- product imag pehle lani he -->
<img src="images/<?php echo $img ;?>" width="150px" height="100px"><br><br>
<!-- ushke baad dubara ye option dena he -->
<input type="file" placeholder="enter product image" name="myfile" style="width:310px;font-size:23px; border-radius:5px 7px;">
</div><br>
 <input type="submit" value="Update" name ="Update" style="height:40px; font-size:20px;font-weight:bold; color:black;background-color:yellow; border-radius:7px 7px;cursor:pointer;">
 </form>
</div>
</div>

 
 <!-- if user click button update so update data -->
<?php
if (isset($_POST['Update'])) {
    $a=$_POST['pname'];
    $b=$_POST['price'];
    $c=$_POST['myvender'];
    
    $d=$_POST['mysize'];
    $e=$_POST['mylabel'];
    $f=$_POST['mycata'];
    if (isset($_FILES['myfile']['name']) && ($_FILES['myfile']['name']!="")) {
        $size=$_FILES['myfile']['size'];
        $temp = $_FILES['myfile']['tmp_name'];
        $type=$_FILES['myfile']['type'];
        $profile_name=$_FILES['myfile']['name'];
        # code...
        // 1 delete old file from folder
        unlink("images/$img");
        // new image upload
        move_uploaded_file($temp,"images/$profile_name");
    }else {
        $profile_name=$img;
    }
    $update=mysqli_query($conn,"update product_table set product_name='$a',price='$b',vender='$c',size='$d',label='$e',category='$f',image_name='$profile_name' where id='$id' ");

    // S_name . email, FatherName eshe aor bhi (ye database column name he)
    // $query = "UPDATE vikashtabletwo set id='$id',S_name='$name',email='$email',F_name='$father', P_Number='$phone',W_No='$whatsappno',Alter_No='$alternativeno',corse='$corse' WHERE id = '$id' ";
    // $data = mysqli_query($Conn,$query);

    if ($update) {
        echo "<script>alert('Record Updated')</script>";    
        ?>
       <meta http-equiv = "refresh" content = "0; url = http://localhost:3000/ADMIN/Show_Data.php"/>
        
        <?php
    }
    else {
        echo "<script>alert('Record Not Delete')</script>";
    }

}



?>

</body>
</html>