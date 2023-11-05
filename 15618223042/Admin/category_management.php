<?php
include('includes/header.php'); 
include('includes/navbar.php');

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

  $conncation = mysqli_connect("localhost","root","","15618223042");

  $query = "SELECT * FROM registration";

  $execute_query =  mysqli_query($conncation ,$query);

  $number_record = mysqli_num_rows($execute_query);

?>
<div class="container-fluid">
                    <div class="card shadow">
<div class="card-header">
                            <div class="row">
                                <h4 class="col-md text-primary m-0 fw-bold">User Info</h4>
                                <div class="col-md">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

   <table  class= "table table-hover ">
   <thead class="table-dark"> 
   <tr>
   <th>ID</th>
   <th>First Name</th>
   <th>Middle Name</th>
   <th>Last Name</th>
   <th>Email</th>
   <th>Phone Number</th>
   <th>Password</th>
   <th>City</th>
   <th>State</th>
   <th>Country</th>
   <th>Educaction</th>
   <th>Gender</th>
   </tr>
   </thead> 
  
<?php
   for ($i=1;  $i <= $number_record; $i++)
   {

    $fetch_data = mysqli_fetch_row($execute_query);

   echo " 
   <tr>
   <td>$fetch_data[0]</td>
   <td>$fetch_data[1]</td>
   <td>$fetch_data[2]</td>
   <td>$fetch_data[3]</td>
   <td>$fetch_data[4]</td>
   <td>$fetch_data[5]</td>
   <td>$fetch_data[6]</td>
   <td>$fetch_data[7]</td>
   <td>$fetch_data[8]</td>
   <td>$fetch_data[9]</td>
   <td>$fetch_data[10]</td>
   <td>$fetch_data[11]</td>
   </tr>
    </tbody>";
   }
echo " </div>";
  echo"</table>";
?>
</body>
</html>
<!-- /.container-fluid -->

