<?php

session_start();
 if(isset($_SESSION['suname'])){
    unset($_SESSION['suname']);
    unset($_SESSION['spass']);
    $_SESSION['message']="User Logged out Successfully..";
 }
 header('location:home.php');
 
?>