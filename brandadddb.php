<?php
 require_once 'connection.php';
  if(isset($_POST['submit'])){
    $image= $_FILES['image'];
    $iname= $_POST['brandname'];
    $imagename = $image['name'];
    $imagetemp = $image['tmp_name'];
    $imageerror = $image['error'];
    $imagename_sep = explode('.',$imagename);
    $imgextension = strtolower(end($imagename_sep));
    $extensions = array('jpeg','jpg','png','webp');
    if(in_array($imgextension,$extensions)){
        $upload_image = 'brands/'.$imagename;
        move_uploaded_file($imagetemp,$upload_image);
        $sql = "insert into `brands` (images,name) values ('$upload_image','$iname')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<script> alert('Added Brand');
            window.location.href='admin.php';</script>";
        }
        else{
            die(mysqli_error($con));
        }
    }
  }
?>