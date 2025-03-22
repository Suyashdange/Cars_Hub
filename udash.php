<?php
session_start();
require_once "connection.php";
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
      <title>userdetails</title>
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
        
        .wrapper {
            margin-top: 10%;
            border: 1px rgba(255, 255, 2555, .2);
            border-radius: 20px;
            padding: 70px 150px;
            background-color: rgb(240, 235, 242);
            margin-top: 5%;
        }

        h2 {
            font-size: 30px;
        }
        img{
            width: 210px;
            height: 210px;
            display: block;
            border-radius: 50%;
            margin-top: 5%;
            object-fit: cover;
        }
        label {
            margin-right: 20px;
        }
        td{
            white-space: nowrap;
        }
       .pr{
        display:flex;
        height:350px;
       }
       table{
        margin-top: 8%;
        margin-left: -10%;
       }
    </style>
</head>
<body><?php
$uname=$_SESSION['suname'];
$str="select * from userdata where uname='$uname'";
$result = mysqli_query($con,$str);
while($row = mysqli_fetch_assoc($result)){
$un=$row['uname'];
$na=$row['name'];
$email=$row['email'];
$dob= $row['dob'];
$country=$row['country'];
$image = $row['image'];
?>
    <center>
        <div class="wrapper">
            <div class="pr"><?php 
                        echo '<img src = '.$image.' alt = "image">'?><br>
                <h2>Your Profile</h2>
                <table cellspacing="30x">
                    <tr>
                        <td><label><h5> Full Name:</h5></label></td>
                        <td ><h5><?php echo $na;?></h5><br></td>
                    </tr>
                    <tr>
                        <td> <label><h5>  Username:</h5></label></td>
                        <td> <h5><?php echo $un;?></h5><br></td>
                    </tr>
                    <tr>
                        <td> <label><h5>  Email:</h5></label></td>
                        <td>  <h5><?php echo $email;?></h5><br></td>
                    </tr>
                    <tr>
                        <td> <label><h5>  DOB:</h5></label></td>
                        <td> <h5><?php echo $dob;?></h5> <br></td>
                    </tr>
                    <tr>
                        <td> <label><h5>  Country:</h5></label></td>
                        <td> <h5><?php echo $country;?></h5><br></td>
                    </tr>
                </table>
                </div>
            </div><?php
        }
        ?>
    </center>
</body>
</html>
