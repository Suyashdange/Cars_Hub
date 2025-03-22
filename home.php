<?php
require_once 'connection.php';
$str="select * from brands where id <=8";
$result = mysqli_query($con,$str);
$st="select * from parts where id <=8";
$res = mysqli_query($con,$st);
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
      <title>home</title>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
      />
   
      <!-- Bootstrap CSS v5.2.1 -->
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
      />
    </head>
   
    <body>
      <header>
        <!-- place navbar here -->
      </header>
      <main></main>
      <footer>
        <!-- place footer here -->
      </footer>
      <!-- Bootstrap JavaScript Libraries -->
      <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
      ></script>
   
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
      ></script>
    </body>
   </html>
   
    
    <title>home</title>
    <style>
        body{
            margin: 0%;
            padding: 0%;
           box-sizing: border-box ;
           font-family: cCambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
           color: black;
        }
        #homebanner{
            margin-top: 1%;
            margin-left: 5%;
        }
        .line{
          margin-top: 2%;
          margin-left: 10%;
          margin-right: 10%;
        }
        section{
          margin-top: 2%;
          margin-left: 10%;
          margin-right: 10%;
        }
        main{
    display:flex;
    max-width:1500px ; 
    width:95%;
    margin: 3px auto;
    flex-wrap: wrap; 
    justify-content:space-between;
    margin: auto;
   }
.card{
    width: 250px;
    flex: 1 1 210px;
    text-align: center;
    height: 250px;
    margin:20px;
}
main .card .image{
    height: 90%;
}
.pimage{
    width: 240px;
    height: 160px;
    justify-content:center;
  }
  .pimage img{
    width: 70%;
    height: 100%;
    object-fit: contain;
    padding: 6px 6px 6px 6px;
}
main .card .image img{
    width: 70%;
    height: 100%;
    object-fit: contain;
    padding: 6px 6px 6px 6px;
}
.brandstext{
  margin-left: 3%;
  margin-top: 20px;
  margin-bottom: 10px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-weight: 500;
}
.allbrands{
  border-top: 2px solid gray;
  height:40px;
}
.allbrands a{
  margin-top: 10px;
  margin-left: 32px;
  text-decoration:none;
  color:blue; 
}
.buy{
  margin-top:2%;
}
.c2{
  width: 300px;
    flex: 1 1 210px;
    text-align: center;
    height: 250px;
    margin:20px;
}
#vd{
  color:Blue;
  margin-left:-110px;
  position: absolute;
}
    </style>
</head>
<body class="container-fluid">
  <?php
  include "navbar.php";
  ?>
    <img id="homebanner" src="home_banner.png" alt="" width="85%" height="420px">
    <div class="line" style="border-top: 2px solid orange;"></div>
    <section  class="shadow-lg">
    <p class="brandstext"><b>Brands</b></p>
    <main class="container-fluid my-auto">
    <?php
    while($row = mysqli_fetch_assoc($result)){
      $image = $row['images'];
      $name = $row['name'];?>
        <a href="brand.php?name=<?php echo $row["name"];?>"><div class="card shadow-lg">
            <div class="image"><?php
        echo '<img src='.$image.' alt="">
            </div>'?>
            <div class="caption">
              <p class="productname"><?php echo $name;?></p>
            </div>
          </div>
          </a>
      <?php
    }
      ?>
      </main>
      <div class="allbrands">
        <a href="allbrands.php">View All Brands</a>
      </div>
      </section>
  <section  class="shadow-lg">
    <p class="brandstext"><b>Parts</b></p>
    <main class="container-fluid my-auto">
    <?php
    while($row = mysqli_fetch_assoc($res)){
      $image = $row['image'];
      $name = $row['name'];?>
        <a href="viewdetails.php?id=<?php echo $row["id"];?>"><div class="card shadow-lg">
            <div class="pimage"><?php
        echo '<img src='.$image.' alt="">
            </div>'?>
            <div class="caption">
              <p class="productname"><?php echo $name;?></p>
            </div>
            <div class="buy">
              <a href="viewdetails.php?id=<?php echo $row["id"];?>" id="vd">View Details</a>
            </div>
          </div>
          </a>
      <?php
    }
      ?>
      </main>
      <div class="allbrands">
        <a href="allparts.php">View All Parts</a>
      </div>
      </section>
  <?php
  include "footer.php";
  ?>
</body>
</html>