<?php
include "connection.php";
$str="SELECT COUNT(*) as count FROM parts";
$parts = mysqli_query($con,$str);
$row1 = mysqli_fetch_assoc($parts);
$pcount = $row1['count'];
$str="SELECT COUNT(*) as count FROM brands";
$brands = mysqli_query($con,$str);
$row2 = mysqli_fetch_assoc($brands);
$bcount = $row2['count'];
$str="SELECT COUNT(*) as count FROM orders";
$orders = mysqli_query($con,$str);
$row3 = mysqli_fetch_assoc($orders);
$ocount = $row3['count'];
$str="SELECT COUNT(*) as count FROM userdata";
$users = mysqli_query($con,$str);
$row4 = mysqli_fetch_assoc($users);
$ucount = $row4['count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!doctype html>
    <html lang="en">
    
    <head>
      <title>Title</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    </head>
    
    <body>
      <header>
        <!-- place navbar here -->
      </header>
      <main>
    
      </main>
      <footer>
        <!-- place footer here -->
      </footer>
      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
    </body>
    </html>
<style>
    .sec1{
        margin-top: 10%;
        display:flex;
        width:1100px;
        height:90px;
        padding:10px;
        justify-content: space-around;
        margin-left: 10%;
    }
    h4{
        font-weight: 700;
    }
    .sec2{
        margin-top: 5%;
        display:flex;
        width:1100px;
        height:90px;
        padding:10px;
        font-weight: 500;
        justify-content: space-around;
        margin-left: 10%;
    }
    .txt{
        width:200px;
        height: 80px;
    }
</style>
</head>
<body>
    <div class="sec1">
        <div class="txt  shadow-lg">
            <h4>Products</h4>
            <h4><?php echo $pcount-1; ?>+</h4>
        </div>
        <div class="txt  shadow-lg">
            <h4>Brands</h4>
            <h4><?php echo $bcount-1; ?>+</h4>
        </div>
    </div>
    <div class="sec2">
        <div class="txt  shadow-lg">
            <h4>Users</h4>
            <h4><?php echo $ucount-1; ?>+</h4>
        </div>
        <div class="txt  shadow-lg">
            <h4>Orders</h4>
            <h4><?php echo $ocount-1; ?>+</h4>
        </div>
    </div>
</body>
</html>