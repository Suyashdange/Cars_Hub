<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Popup Login Form Design | CodingNepal</title> -->
   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!--CSS CODE-->  
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 10px;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins','Times New Roman', Times, serif;
}
body{
    display: flex;
    height: 100vh;
    width: 100%;
    background-size: cover;
    background-position: center;
}
.wrapper .btn{
  background-color: #e9dcd8;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.8;
  transition: 0.2s;
}

.wrapper{
    border:1px rgba(255, 255, 2555, .2);
    border-radius:10px;
    padding:  70px 60px;
    background-color: rgb(248, 238, 227);
    text-align: center;
    justify-content: center;
    margin-left:35%;
    margin-bottom:7%;
    margin-top: 5%;
}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.btn:hover{
  background-color: hsl(32, 67%, 50%);
}
.register-link a{
  text-decoration: none;
  text-decoration-color: black;
  font-weight: 800;
}
</style>
</head>
  <body>
    <div class="wrapper">
        <form action="loginv.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          <h1>Login</h1>
          <div class="input-box">
            <input type="text" name="uname" placeholder="Username" required>
            <i class='bx bxs-user-circle' ></i>
          </div>
          <div class="input-box">
            <input type="password" name="pass" placeholder="Password" required>
            <i class='bx bx-lock-alt'></i>
          </div>
          <div class="remember-forgot">
          <label><input type="checkbox" required>I Agree the terms & conditions</label>
          </div>
          <button type="submit" name="submit" class="btn">Login</button>
          <div class="register-link">
         <p>Don't have a Account ?<a href="Signup.php">Register</a></p>
          </div>
        </form>
      </div>
</body>
</html>