 <?php
        require_once 'connection.php';
        if(isset($_POST['submit'])){
         $finfo=$_POST['finfo'];
         $mob=$_POST['mob'];
         $str="insert into feedback values('$finfo','$mob')";
         $re = mysqli_query($con,$str);

         header("Location: feedback.php?error=Response Submitted successfully");
        }
      
?>
