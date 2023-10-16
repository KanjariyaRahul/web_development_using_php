<?php 
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email= $_POST['email'];
  $mobile_no = $_POST['mobile_no'];
  $address= $_POST ['address'];
  $hobbies = implode(",",$_POST['hobbies']);
  $gender = $_POST ['gender'];
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
         echo "<td> First Name</td>";
         echo "<td>$firstname</td>";
         echo "</tr>";

         echo "<tr>";
         echo "<td> Last Name</td>";
         echo "<td>$lastname</td>";
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
         echo "<td>Hobbies</td>";
         echo "<td>$hobbies</td>";
         echo "</tr>";

         echo "<tr>";
         echo "<td>Gender</td>";
         echo "<td>$gender</td>";
         echo "</tr>";

         echo "</table>";
        ?>
        </center>
        
    </body>
</html>