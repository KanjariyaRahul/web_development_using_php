<?php 
  $fname = $_POST['name'];
  $email= $_POST['email'];
  $mobile_no = $_POST['mobile_no'];
  $address= $_POST ['address'];
  $university = $_POST ['university'];
  $hobbies = $_POST ['hobbies'];
?>

<html>
    <head>
        <title>

        </title>
    </head>
    <body >
       <center>
        <?php 

         echo "<table border='1' cellpadding='2'>";
         echo "<tr>";
         echo "<td>Name</td>";
         echo "<td>$fname</td>";
         echo "</tr>";

         echo "<tr>";
         echo "<td>Email</td>";
         echo "<td>$email</td>";
         echo "</tr>";

         echo "<tr>";
         echo "<td>Mobile No</td>";
         echo "<td>$mobile_no</td>";
         echo "</tr>";

         echo "<tr>";
         echo "<td>Address</td>";
         echo "<td>$address</td>";
         echo "</tr>";

         echo "<tr>";
         echo "<td>University</td>";
         echo "<td>$university</td>";
         echo "</tr>";

         echo "<tr>";
         echo "<td>Hobbies</td>";
         echo "<td>$hobbies</td>";
         echo "</tr>";

         echo "</table>";
        ?>
        </center>
        
    </body>
</html>