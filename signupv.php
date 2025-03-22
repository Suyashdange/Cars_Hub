<?php
include("connection.php");
  if(isset($_POST['submit']))
  {

    $image= $_FILES['image'];
    $cname=$_POST['cname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $dob=$_POST['dob'];
    $country=$_POST['country'];
    $cpassword = $_POST['cpass'];
  if($pass == $cpassword){

 $str="select uname from userdata";

 $users = mysqli_query($con,$str); 

 while ($row = mysqli_fetch_assoc($users)) {
    if ($uname == $row['uname'])
    {
      header("Location: signup.php?error=User Name Already Exist");
    }
    else{
      $imagename = $image['name'];
      $imagetemp = $image['tmp_name'];
      $imageerror = $image['error'];
      $imagename_sep = explode('.',$imagename);
      $imgextension = strtolower(end($imagename_sep));
    $extensions = array('jpeg','jpg','png','webp');
    if(in_array($imgextension,$extensions)){
        $upload_image = 'profile/'.$imagename;
        move_uploaded_file($imagetemp,$upload_image);
        $id = "" . rand(1111, 9999);
        $sql="insert into `userdata` (uname,name,email,password,dob,country,image) values ('$id','$uname','$cname','$email','$pass','$dob','$country','$upload_image')";
    if (mysqli_query($con, $sql)) 
  {
    header("location:login.php");
  }
  else{
    header("location:signup.php");
  }
}
    }
}
}
else{
  header("Location: signup.php?error=Password and Confirm Password are not same");
}
  }
?>
