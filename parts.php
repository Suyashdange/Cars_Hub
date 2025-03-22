<?php
require_once 'connection.php';
$str="select * from `brands`";
$result = mysqli_query($con,$str);
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
    <title>home</title>
    <style>
        body{
            margin: 0%;
            padding: 0%;
           box-sizing: border-box ;
        }
        #homebanner{
            margin-top: 1%;
            margin-left: 5%;
        }
        section{
            margin-top: 2%;
            margin-left: 10%;
            margin-right: 10%;
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: space-between;
        }
        .card{
          width:150px;
          border: 2px solid black;
        }
    </style>
</head>
<body>
  <?php
  include "navbar.php";
  ?>
    <img id="homebanner" src="home_banner.png" alt="" width="85%" height="420px">
    <section style="border-top: 2px solid orange;" class="d-flex">
    <?php
    while($row = mysqli_fetch_assoc($result)){
      $image = $row['images'];
      $name = $row['name'];?>
        <main>
          <div class="card">
            <div class="image"><?php
            echo ' <img src='.$image.' alt="">'?>
            </div>
            <div class="caption">
              <p class="rate">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </p>
              <p class="product_name"><?php echo $name; ?></p>
              <p class="price"></p>
              <p class="discount"></p>
            </div>
            <button class="add">Add to Cart</button>
          </div>
        </main>
      <?php
      }
      ?>
  </section>
  <?php
  include "footer.php";
  ?>
</body>
</html>