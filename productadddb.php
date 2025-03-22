<?php
 require_once 'connection.php';
  if(isset($_POST['submit'])){
    $image= $_FILES['image'];
    $price= $_POST['productp'];
    $category= $_POST['productc'];
    $brand= $_POST['productb'];
    $descrp= $_POST['productd'];
    $specs= $_POST['products'];
    $iname= $_POST['productn'];
    $imagename = $image['name'];
    $imagetemp = $image['tmp_name'];
    $imageerror = $image['error'];
    $imagename_sep = explode('.',$imagename);
    $imgextension = strtolower(end($imagename_sep));
    $extensions = array('jpeg','jpg','png','webp');
    if(in_array($imgextension,$extensions)){
        $upload_image = 'parts/'.$imagename;
        move_uploaded_file($imagetemp,$upload_image);
        $sql = "insert into `parts` (image,name,price,category,brand,description,specification) values ('$upload_image','$iname',$price,'$category','$brand','$descrp','$specs');";
        $result = mysqli_query($con,$sql);
        if($result){
            header("Location: productadd.php?error= $iname Data Uploaded");
        }
        else{
            die(mysqli_error($con));
        }
    }
    else{
      header("Location: productadd.php?error= Image format wrong");
    }
  }
?>