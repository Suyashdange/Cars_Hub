<?php
require_once 'connection.php';
$str="select * from `brands`";
$result = mysqli_query($con,$str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!doctype html>
    <html lang="en">
    
    <head>
      <title>home</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    </head>
    
    <body>
      <header>
        <!-- place navbar here -->
      </header>
      <main>
    
      </main>
      <footer>
        <!-- place footer here -->
      </footer>
      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
    </body>
    
    </html>
    <title>home</title>
    <style>
        .image{
            width: 70px;
            height: 70px;
            object-fit: contain;
        }
        table{
            width: 800px;
        }
        table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
}
tbody td {
  font-weight: 500;
  color: black;
}
tr:hover{
    background-color:rgba(129, 121, 121, 0.214);
}
h5{
  margin-left:37%;
    margin-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: 400;
    font-style: oblique;
}
a{
  text-decoration:none;
  color: #fff;
  font-size: larger;
  font-weight: 300;
  background-color: #FF9F00;
  border: 2px solid #FF9F00;
}
a:hover{
  background-color: #fff;
    color: #000;
}
center{
  display: flex;
}
input{
  margin-left:31%;
  height:30px;
  margin-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: 400;
    font-style: oblique;
}
#sear{
  background-color: #FF9F00;
  color:white;
  height:30px;
  margin-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-weight: 400;
    font-style: oblique;
}
</style>
</head>
<body>
<div class="table bg-white">
<center><h5>Brands Present On Web</h5><input type="text" id="searchInput" placeholder="Search..."><button onclick="searchTable()" id="sear">Search</button></center>
              <table class="table table-bordered" id="dataTable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Images</th>
                    <th scope="col">Name</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
        <?php
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $image = $row['images'];
      $name = $row['name'];?>
                  <tr>
                    <th scope="row" style="color: #666666;"><?php echo $id; ?></th>
                    <td><?php echo '<img src='.$image.' class="image"/>'?></td>
                    <td><?php echo $name; ?></td>
                    <td><a href="deluser.php?bdel=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
            <?php
            }
            ?>
        </tbody>
</table>
<script>
        function searchTable() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows and hide those that don't match the search input
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 is the column with the name
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>