<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
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
    #h{
        cursor:pointer;
        /* background-color:#d071f9; */
    }
    .website{
        position: absolute;
        right:40px;
        top:60px;
        font-size:25px;
        font-weight:bold;
      
        /* font-size:60px; */
    }
    .website a{
        text-decoration:none;
        color:black;
    }
</style>

<body>
    <div class="container">
        <div class="box">
        <h1 style="font-size:50px;"><mark>WELCOME ADMIN PENEL<mark></h1><span class="website"><mark><a href="../index.php">Check Website</a></mark></span>
    <form action="insert_productprocess.php" method="post" enctype="multipart/form-data">
        <div>
            <label>product name</label>
        <input type="text" placeholder="Enter product name" name="pname" style="padding-left:22px;margin-left:55px;font-size:23px; border-radius:5px 7px;" ><br><br>
        </div>
        <div>
        <label>product price</label>
            <input type="number" placeholder="enter product price" name="price" style="padding-left:22px;margin-left:55px;font-size:23px; border-radius:5px 7px;"><br><br>
        </div>
        <div>
        <label>product vender</label>
            <select name="myvender" style="width:310px;margin-left:38px;font-size:23px; border-radius:5px 7px;">
                <option value="Clothes">Clothes</option>
                <option value="Kotten">Kotten</option>
                <option value="Metel">Metel</option>
                <option value="Copper">Copper</option>
                <option value="Gold">Gold</option>
                <option value="Still">Still</option>
            </select><br><br>
        </div>
        <div>
        <label>product size</label>
            <input type="number" placeholder="enter product size" name="mysize" style="padding-left:22px;margin-left:70px;font-size:23px; border-radius:5px 7px;"><br><br>
        </div>
        <div>
        <label>product Label</label>
        <select name="mylabel" style="width:310px;margin-left:45px;font-size:23px; border-radius:5px 7px;">
            <option value="popular">popular</option>
            <option value="letest_drop">letest_drop</option>
            <option value="gallery">gallery</option>
        </select><br><br>
    </div>
    <div>
    <label>product categroy</label>
    <select name="mycata" style="width:310px;margin-left:18px;font-size:23px; border-radius:5px 7px;">
        <option value="Men">Men</option>
        <option value="women">women</option>
        <option value="formal">formal</option>
    </select><br><br>
</div>
<div>
<label>product image</label>
<input type="file" placeholder="enter product image" name="myfile" style="width:310px;margin-left:38px;font-size:23px; border-radius:5px 7px;"><br><br>
</div>

<input type="submit" value="Insert Product" id="h" name ="submited" style="font-size:25px;font-weight:bold;background-color:yellow;outline:none;border-radius:7px 7px;"> 

        </div>
    </div>




    </form>
</body>
</html>