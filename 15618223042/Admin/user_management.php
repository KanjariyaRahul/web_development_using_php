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
<script type="text/javascript">
    function delete_user()
    {
        if (confirm('Are You Sure to Delete this Record?'))
        {
            window.location.href = 'user_management.php?delete=' + uid;
        }
    }
    </script>
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
    
    <form action=user_delete.php method=post>
    <div class="table-responsive">
   <table  class= "table table-hover" style="width:auto" >
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
   <th>Update</th>
   <th>Delete</th>

   </tr>
   </thead> 
  
<?php
   for ($i=1;  $i <= $number_record; $i++)
   {

    $fetch_data = mysqli_fetch_row($execute_query);
?>
   
   <tr>

   <td><?= $fetch_data[0] ?></td>
   <td><?= $fetch_data[1] ?></td>
   <td><?= $fetch_data[2] ?></td>
   <td><?= $fetch_data[3] ?></td>
   <td><?= $fetch_data[4] ?></td>
   <td><?= $fetch_data[5] ?></td>
   <td><?= $fetch_data[6] ?></td>
   <td><?= $fetch_data[7] ?></td>
   <td><?= $fetch_data[8] ?></td>
   <td><?= $fetch_data[9] ?></td>
   <td><?= $fetch_data[10] ?></td>
   <td><?= $fetch_data[11] ?></td>
  <td> <button  type=submit name='update[]' class="btn btn-success" > UPDATE </button></td>
  <td> <button  type=submit name='delete[]' class="btn btn-danger" value=<?=$fetch_data[0]?> >DELETE  </button></td>
   </tr>

    </tbody>
    <?php
   }
echo " </div>";
  echo"</table>";
  
  echo "</form>";
?>
</body>
</html>
<!-- /.container-fluid -->

