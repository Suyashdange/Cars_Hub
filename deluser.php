<?php
include "connection.php";

if(isset($_GET['bdel'])){
    $bdel=$_GET['bdel'];
    $re="DELETE FROM brands WHERE id=$bdel";
    if($con->query($re)===TRUE){
      echo "<script> alert('Brand Deleted Successfully...'); 
      window.location.href='brands.php';</script>";
    }
  }
  if(isset($_GET['pdel'])){
    $pdel=$_GET['pdel'];
    $re2="DELETE FROM parts WHERE id=$pdel";
    if($con->query($re2)===TRUE){
      echo "<script> alert('Product Deleted Successfully...'); 
      window.location.href='products.php';</script>";
    }
  }
?>