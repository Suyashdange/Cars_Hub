<?php
require_once "connection.php";
if(isset($_POST['submit'])){
    $finfo=$_POST['finfo'];
    $mob=$_POST['mob'];
    $str="insert into faq values('$finfo','$mob')";
    $re = mysqli_query($con,$str);
    if($re){
        echo "<script> alert('Feedback Submitted'); 
        window.location.href='feedback.php';</script>";
    }
   }
?>