<?php
include "navbar.php";
require_once 'connection.php';
if(isset($_GET['id'])){
$id = $_GET['id'];
}
$str="select * from parts where id = $id";
$result = mysqli_query($con,$str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!doctype html>
    <html lang="en">
    
    <head>
      <title>Part Detail</title>
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
 @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html, body{
    font-family: 'Roboto', sans-serif;
}

img{
    width: 100%;
    display: block;
    object-fit: contain;
}
.main-wrapper{
    min-height: 100vh;
    background-color: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container{
    max-width: 1200px;
    padding: 0 1rem;
    margin: 0 auto;
}
.product-div{
    margin: 1rem 0;
    padding: 2rem 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    background-color: #fff;
    border-radius: 3px;
    column-gap: 10px;
}
.product-div-left{
    padding: 20px;
}
.product-div-right{
    padding: 20px;
}
.img-container img{
    width: 500px;
    height:500px;
    margin: 0 auto;
}
.hover-container{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    margin-top: 32px;
}
.hover-container div{
    border: 2px solid rgba(252, 160, 175, 0.7);
    padding: 1rem;
    border-radius: 3px;
    margin: 0 4px 8px 4px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.active{
    border-color: rgb(255, 145, 163)!important;
}
.hover-container div:hover{
    border-color: rgb(255, 145, 163);
}
.hover-container div img{
    width: 50px;
    cursor: pointer;
}
.product-div-right span{
    display: block;
}
.product-name{
    font-size: 26px;
    margin-bottom: 22px;
    font-weight: 700;
    letter-spacing: 1px;
    opacity: 0.9;
}
.product-price{
    font-weight: 700;
    font-size: 24px;
    opacity: 0.9;
    font-weight: 500;
}
.product-rating{
    display: flex;
    align-items: center;
    margin-top: 12px;
}
.product-rating span{
    margin-right: 6px;
}
.product-description{
    font-weight: 18px;
    line-height: 1.6;
    font-weight: 300;
    opacity: 0.9;
    margin-top: 22px;
}
.btn-groups{
    margin-top: 22px;
}
.btn-groups button{
    display: inline-block;
    font-size: 16px;
    font-family: inherit;
    text-transform: uppercase;
    padding: 15px 16px;
    color: #fff;
    cursor: pointer;
    transition: all 0.3s ease;
    height:60px;
} 
.btn-groups button .fas{
    margin-right: 8px;
}
.buy-now-btn{
    background-color: #000;
    border: 2px solid #000;
}
.buy-now-btn:hover{
    background-color: #fff;
    color: #000;
}
@media screen and (max-width: 992px){
    .product-div{
        grid-template-columns: 100%;
    }
    .product-div-right{
        text-align: center;
    }
    .product-rating{
        justify-content: center;
    }
    .product-description{
        max-width: 400px;
        margin-right: auto;
        margin-left: auto;
    }
}

@media screen and (max-width: 400px){
    .btn-groups button{
        width: 100%;
        margin-bottom: 10px;
    }
}
    </style>
</head>
<body><br>
    <h4 class="brandstext">&nbsp;</h4>
    <?php
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $price = $row['price'];
      $category = $row['category'];
      $brand = $row['brand'];
      $des = $row['description'];
      $spec = $row['specification'];
      $image = $row['image'];
      $name = $row['name'];?>
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container"><?php 
                        echo '<img src = '.$image.' alt = "image">'?>
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"><?php echo $name;?></span>
                    <span class = "product-price"><?php echo $price;?>$</span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description"><h6>Description -</h6><?php echo $des;?></p>
                    <p class = "product-description"><h6>Specification -</h6><?php echo $spec;?></p>
                    <div class = "btn-groups">
                    <a href="purchase.php?id=<?php echo $row["id"];?>"><button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button></a>
                    </div>
                </div>
            </div>
        </div>
      <?php
    } 
    include "footer.php";
    ?>
</body>
</html>