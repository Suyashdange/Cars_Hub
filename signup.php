<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
  margin: 0;
  padding: 10px;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins','Times New Roman', Times, serif;
}
.wrapper{
    border:1px rgba(255, 255, 2555, .2);
    border-radius:10px;
    padding:  78px 65px;
    background-color: rgb(248, 238, 227);
    text-align: center;
    justify-content: center;
    margin-left:30%;
    margin-top: 2%;
    width: 650px;
}
.wrapper .btn{
 background-color: #905311a0;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  margin-left: 100%;
}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.btn:hover{
  background-color:hsl(36, 82%, 51%);
}
input{
  width:250px;
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
      <form action="signupv.php" method="post" enctype="multipart/form-data">
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
      <table>
        <h1>SignUp</h1>
        <tr>
            <td><label> Customer Name:</label></td>
            <td><input type="text" name="cname" placeholder="Enter Full Name" required>
            <i class='bx bxs-user-circle' ></i></td>
            </tr>
            <tr>
            <td><label> Email Address:</label></td>
                    <td><input type="email" name="email" placeholder="E-mail" required>
                    <i class='bx bxl-gmail'></i></td>
                    </tr>
              <tr>
              <td><label> Password:</label></td>
                <td><input type="password" name="pass" placeholder="password" required>
                <i class='bx bx-lock-alt'></i></td>
              </tr>
                <tr>
                  <td><label> Confirm Password:</label></td>
                    <td><input type="password" name="cpass" placeholder=" Confirm password" required>
                    <i class='bx bx-lock-alt'></i></td>
                </tr>
                <tr>
                  <td><label> Username:</label></td>
            <td><input type="text" name="uname" placeholder="Username" required>
            <i class='bx bxs-user-circle' ></i></td>
            </tr>
            <tr>
              <td><label> Date of Birth:</label></td>
            <td><input type="date" name="dob" width="54px" placeholder="Enter Date of birth" required>
            <i class='bx bx-calendar'></i></td>
            </tr>
            <tr>
              <td><label> Country Name:</label></td>
            <td><input type="text" name="country" placeholder="country name" required>
            <i class='bx bx-world'></i></td>
            </tr>
            <tr>
            <td><label> Profile Image:</label></td>
            <td><input type="file" name="image" placeholder="Insert image" required />
            <i class='bx bx-image'></i></td>
            </tr>
              <tr>
                <td><button type="submit" name="submit" class="btn">Signup</button></td>
              </tr>
      </table>
      <div class="register-link">
         <p>I already have Account ?<a href="login.php">Login</a></p>
          </div>
        </form>
    </div>
  </body>
</html>