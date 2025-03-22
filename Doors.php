<?php
include "navbar.php";
require_once 'connection.php';
$str="select * from parts where category ='Door'";
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
      <title>Audiparts</title>
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
   main .card{
    width: 200px;
    flex: 1 1 210px;
    text-align: center;
    height: 200px;
    margin:20px;
} 
main .card .image{
    height: 90%;
}
main .card .image img{
    width: 70%;
    height: 100%;
    object-fit: contain;
    padding: 6px 6px 6px 6px;
}
    </style>
</head>
<body>
    <section  class="shadow-lg">
        <main class="container-fluid my-auto">
        <?php
        while($row = mysqli_fetch_assoc($result)){
          $image = $row['image'];
          $name = $row['name'];?>
          <a href="viewdetails.php?id=<?php echo $row["id"];?>"><div class="card shadow-lg">
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
          </section>
</body>
</html>
<?php
include "footer.php";
?>