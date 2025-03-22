<html>

<head>
    <style>
        .wrapper .btn {
            background-color: #e9dcd8;
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
            background-color: rgb(240, 235, 242);
            margin-top: 10%;
        }

        h2 {
            font-size: 30px;
        }

        .btn:hover {
            background-color: hsl(32, 67%, 50%);
        }

        form {
            width: 800px;
            margin-top: 5%;
            height: 100px;
        }

        label {
            margin-right: 20px;
        }
        #lk{
            color: #fff;
  font-size: larger;
  font-weight: 300;
  background-color: #FF9F00;
  border: 2px solid #FF9F00;
        }
        #lk:hover{
            background-color: #fff;
    color: #000;
        }
        input{
            width: 200px;
            height: 30px;
        }
    </style>
    <title>product add form</title>
</head>

<body>
    <center>
        <form action="productadddb.php" method="post" enctype="multipart/form-data"> 
        <div class="wrapper">
                <table cellspacing="30x">
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                    <h2>Product Information</h2>
                    <tr>
                        <td><label> Product Image:</label></td>
                        <td> <input type="file" name="image" placeholder="Insert image here" required/><br></td>
                    </tr>
                    <tr>
                        <td><label> Product Name:</label></td>
                        <td> <input type="text" name="productn" placeholder="Enter name of  product" required/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Product Price:</label></td>
                        <td> <input type="text" name="productp" placeholder="Enter price" required/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Product Category:</label></td>
                        <td> <input type="text" name="productc" placeholder="Enter Category" required/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Product Brand:</label></td>
                        <td> <input type="text" name="productb" placeholder="Enter Brand"  required/><br></td>
                    </tr>
                    <tr>
                        <td> <label> Product Description:</label></td>
                        <td> <input type="text" name="productd" placeholder="Enter description" height="50px"/><br></td>
                    </tr>
                    <tr>
                        <td><label> Product Specification:</label></td>
                        <td> <input type="text" name="products" placeholder="Enter Specification" required/><br></td>
                    </tr>
                </table>
                <input type="submit" name="submit" id="lk"></input>
            </div>
        </form>
    </center>
</body>

</html>