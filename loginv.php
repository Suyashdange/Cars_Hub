<?php 

session_start();
require_once 'connection.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];

if($uname=='suyash' && $pass=='0101' || $uname=='swapnil' && $pass=='0101' ){

    $_SESSION['message']="Admin Login Successfully..";
    header('location:admin.php'); 
}  
else{
    
    if(isset($_POST['submit'])){

        $uname=$_POST['uname'];
        $pass=$_POST['pass'];

        $sql="SELECT * FROM userdata where uname='$uname' AND password='$pass'";

        $result=mysqli_query($con,$sql);

        if(mysqli_num_rows($result)){
            $_SESSION['suname']=$uname;
            $_SESSION['spass']=$pass;
            $_SESSION['message']="login Successfully..";
            header('location:home.php');
        }else{
            header("Location: login.php?error=Invalid Credentials");
        }

    }
}

?>