<?php
require_once "connection.php";
$s="select * from feedback " ;
      $result=mysqli_query($con,$s);
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
      <title>Feedback</title>
      <style>
        body{
        background-color: rgb(248, 238, 227);
        align-content: center;
     }
     .feed{
      margin-top:5%;
     }
        p{
          margin-top:3%;
        }
      </style>
</head>
<body>
  <div class="feed">
      <center><h2> Vehicle Part System Feedback's </h2></center>
      <center><table>
      <?php
      while($row=mysqli_fetch_assoc($result)){
            $finfo2 = $row['finfo'];
            $mobile = $row['mob'];?>
            <center>
              <tr>  
            <p><b><?php echo $finfo2;?></b></p></center>
      </tr>
                  <?php
             }
             ?>
  </table></center>
  </div>
</body>
</html>
     
