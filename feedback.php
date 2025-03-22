<html>

<head>
    <style>
        body {
            background-color: white;
            display: flex;
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .wrapper .btn {
            background-color: #f3af32;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.8;
            transition: 0.2s;
        }

        .wrapper {

            border: 1px rgba(255, 255, 2555, .2);
            border-radius: 20px;
            padding: 70px 150px;
            background-color:  rgb(248, 238, 227);

            margin-top: 10%;
          


        }

        h2 {
            font-size: 30px;
        }

        .btn:hover {
            background-color: hsl(32, 67%, 50%);
        }

        form {
            margin-left: 300px;
        }

        label {
            margin-right: 20px;
        }
        #ta{
            width: 300px;
            height: 100px;    
        }
    </style>
    <title>feedback form</title>
</head>
<body>
    
    <center>
        <form action="feedbackv.php" method="post" enctype="multipart/form-data"> 
        <div class="wrapper">
                <table cellspacing="30x">
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                    <h2>FEEDBACK </h2>
                    <tr>
                        <td><label> Feedback:</label></td>
                        <td> <textarea placeholder="Enter your feedback" name="finfo" id="ta"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Mobile No: (optional)</label></td>
                        <td> <input type="text" name="mob" placeholder="Enter your mobile number" /><br></td>
                    </tr>
                   
                </table>
                <input type="submit" id="btn" name="submit" class="btn" />
            </div>
        </form>
    </center>
    
</body>

</html>