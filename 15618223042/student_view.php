<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
<?php
  $conncation = mysqli_connect("localhost","root","","15618223042");

  $query = "SELECT * FROM student";

  $execute_query =  mysqli_query($conncation ,$query);

  $number_record = mysqli_num_rows($execute_query);


   echo "<table  class= table table-bordered> 
 
   <tr>
   <td>ID</td>
   <td>Name</td>
   <td>Email</td>
   <td>City</td>
   </tr>
   
   "; 

   for ($i=1;  $i <= $number_record; $i++)
   {

    $fetch_data = mysqli_fetch_row($execute_query);
    echo "
   <tr>
   <td>$fetch_data[0]</td>
   <td>$fetch_data[1]</td>
   <td>$fetch_data[2]</td>
   <td>$fetch_data[3]</td>
   </tr>";
   }
  echo"</table>";
?>
</body>
</html>

