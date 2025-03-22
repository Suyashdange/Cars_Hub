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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <style>
        body {
            margin: 0%;
            padding: 0%;
        }

        .wrapper .btn {
            background-color: #FF9F00;
            border: 2px solid #FF9F00;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.8;
            transition: 0.2s;
        }
        .wrapper .btn:hover{
            background-color: #fff;
            color: #FF9F00;
        }
        .wrapper {

            border: 1px rgba(255, 255, 2555, .2);
            border-radius: 20px;
            width: 600px;
            background-color: rgb(240, 235, 242);
            margin-top: 2%;
            margin-bottom: 10%;
        }

        h2 {
            font-size: 30px;
        }
        .butn{
            background-color: #FF9F00;
            border: 2px solid #FF9F00;
            margin-right: 8px;
            margin-top:2%;
            border-radius:5px;
            padding: 4px 4px;
        }
        .butn:hover {
            background-color: #fff;
            color: #FF9F00;
        }
        label {
            margin-right: 20px;
        }
        td{
            padding: 7px 15px;  
        }
        #print{
            margin-left:5%;
        }
        input{
            width:240px;
        }
    </style>
    <title>order form</title>
</head>
<body>
    <?php
        if(isset($_SESSION['suname'] )) {  
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $price = $row['price'];
      $category = $row['category'];
      $brand = $row['brand'];
      $des = $row['description'];
      $spec = $row['specification'];
      $image = $row['image'];
      $name = $row['name'];?>
            <button class="butn" id="print" onclick="printPage();">Print</button> <center>
        <form action="payment.php" method="post" id="myForm">
            <div class="wrapper">
                <table cellspacing="30x">
                    <h2>Order Form</h2>
                    <tr>
                        <td><label> Customer Name:</label></td>
                        <td> <input type="text" name="cname" placeholder="Enter your name" required/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Mobile No:</label></td>
                        <td> <input type="text" name="mob" placeholder="Enter Mobile number" required/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Address:</label></td>
                        <td> <input type="text" name="add" placeholder="Enter Your address" required/><br></td>
                    </tr>
                    <tr>
                        <td><label> Email-Id:</label></td>
                        <td> <input type="email" name="email" placeholder="Enter Email id" required/><br></td>
                    </tr>
                    <tr>
                        <td><label> Product Name:</label></td>
                        <td> <input type="text" name="pname" value="<?php echo $name?>" readonly/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Date:</label></td>
                        <td> <input id="dateInput" type="date" name="odate" readonly required/><br></td>
                    </tr>
                    <tr>
                        <td><label> Price:</label></td>
                        <td> <input type="number" name="price" value="<?php echo $price?>" readonly/>$ Dollars<br></td>
                    </tr>
                    <tr>
                        <td><label> Quantity:</label></td>
                        <td> <input type="number" name="Quantity" placeholder="choose Quantity" onchange="Calc(this);" min="1" value="1"/><br></td>
                    </tr>
                    <tr>
                        <td><label>Total Price:</label></td>
                        <td> <input type="text" name="tprice" value="<?php echo $price?>" readonly/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Category :</label></td>
                        <td> <input type="text" name="category" placeholder="Enter category" value="<?php echo $category?>" readonly/><br> </td>
                    </tr>
                   
                </table>
                <input type="submit" name="submit" id="submit" class="btn" value="Go For Payment"/>
            </div>
        </form>

    </center>
          <?php
          }
        }
          else{
            echo "<script> alert('Log in Required'); 
    			window.location.href='login.php';</script>";
          }
       
          ?>
          <script>
            function Calc(v){
                var $row = $(v).closest('table'); 
                var qty = $row.find('input[name="Quantity"]').val(); 
                var rate = $row.find('input[name="price"]').val(); 
                var amt = qty * rate;
                $row.find('input[name="tprice"]').val(amt);
            }
        function printPage() {
           window.print();
        }
        // Get the current date in the 'YYYY-MM-DD' format
        const currentDate = new Date().toISOString().split('T')[0];
        
        // Set the 'value' attribute of the date input to today's date
        document.getElementById('dateInput').value = currentDate;
          </script>
</body>
</html>
