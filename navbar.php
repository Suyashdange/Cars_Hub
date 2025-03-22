<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Teko:wght@300&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--CSS CODE-->
  <style>
    body{
      margin: 0%;
      padding: 0%;
      cursor: auto;
    }
    nav{
      overflow: hidden;
      position: sticky;
      top: 0;
      z-index: 100;
      height: 80px;
      display: flex;
      justify-content: space-around;
      background-color: white;
      filter: drop-shadow(5px 2px 10px gray);
    }
    .logo{
      margin-top: -43px;
      margin-bottom: 10px;
    }
    .searchbox{
      display: flex;
      margin-top: 22px;
      height: 40px;
    }
    .searchbox input{
      border-radius: 5px;
      width: 200px;
      transition: 0.3s ease-in-out;
    }
    .searchbox input:focus{
      border-radius: 5px;
      box-shadow: inset 0px 10px 10px 0 rgba(59, 57, 57, 0.282);;
      width: 400px;
    }
    #searchbtn{
      margin-top: -5px;
      width: 50px;
      height: 50px;
      background-color: rgb(255, 255, 255);
      border-radius: 5px;
      border: 0;
      background-image: url(Icons/search.png);
      background-size: cover;
      cursor: pointer;
    }
    .searchbox button img{
      justify-content: center;
      width: 40px;
      height: 40px;
    }
    .navconten{
      width: 350px;
      margin-right: -110px !important;
      display: flex;
      justify-content: space-around;
      margin-top: 15px;
    }
    .navconten a {
      margin-top: 25px;
      margin-left: 10px;
      text-decoration: none;
      color: black;
      font-size: 5px;
      font-weight: 100;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .hub a {
      text-decoration: none;
      width: 65px;
      height: 65px;
      margin-top: -2px;
      margin-right: 45px;
      margin-bottom: 5px;
      display: flex;
    }
    .hub a h6 {
      color: black;
      margin-top: 35px;
      font-size: 17px;
      font-weight: 500 !important;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .keywords{
            margin: 2% 10% 0 20%;
        }
    .keywords h6{
            margin-left: 2px;
            text-align: center;
            display: block;
            background: rgba(128, 128, 128, 0.415) ;
            color: rgb(9, 9, 9);
            text-transform: uppercase;
            font-weight: 500;
            line-height: 35px;
            width: 10%;
            float: left;
        }
    .keywords h6:hover{
            border-top: 2px solid #eb8d0a;
            background: rgba(128, 128, 128, 0.186) ;
        } 
  </style>
</head>
<body>
  <!--NAVBAR -->
  <nav>
    <div class="logo">
      <img src="logo1.png" alt=" LOGO " width="200px" height="190px">
    </div>
    <div class="searchbox">
      <input type="search" placeholder="search.." id="searchTerm"><button id="searchbtn" type="submit"></button> 
    </div>
    <div class="navconten">
      <a href="home.php"><h6>Home</h6></a>
      <a href="AboutUs.php"><h6>About Us</h6></a>
      <?php
           if(isset($_SESSION['suname'] )) {
            ?>

<div class="hub">
        
      <a href="myhub.php"><img src="Icons/user.png" alt="User"><h6>My&nbsp;Hub</h6></a>
    </div>

          <?php
          }else{

            ?>
         <a href="login.php"><h6>Login</h6></a>
        <a href="Signup.php"><h6>Sign Up</h6></a>

          <?php
          }
          
          ?>
    </div>
  </nav>
  <!--Keywords-->
<div class="keywords">
  <a href="Engines.php"><h6>Engines</h6></a>
  <a href="Wheels.php"><h6>Wheels</h6></a>
  <a href="Exhausts.php"><h6>Exhausts</h6></a>
  <a href="Hoods.php"><h6>Hoods</h6></a>
  <a href="Mirrors.php"><h6>Mirrors</h6></a>
  <a href="Brakes.php"><h6>Brakes</h6></a>
  <a href="Lights.php"><h6>Lights</h6></a>
  <a href="Doors.php"><h6>Doors</h6></a>
</div>
<div id="content">
        <!-- Your website content here -->
    </div>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const content = document.getElementById("content");
            const searchForm = document.getElementsByTagName("body");
            const searchTermInput = document.getElementById("searchTerm");

            // Function to perform the search
            function performSearch() {
                const searchTerm = searchTermInput.value.toLowerCase();
                const paragraphs = content.getElementsByTagName("p");

                for (const paragraph of paragraphs) {
                    const text = paragraph.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        
                    } else {
                        paragraph.style.display = "none";
                    }
                }
            }

            // Attach a submit event listener to the form
            searchForm.addEventListener("submit", function (e) {
                e.preventDefault(); // Prevent form submission
                performSearch();
            });
        });
    </script>
</body>
</html>