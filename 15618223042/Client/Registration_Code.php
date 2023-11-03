<?php 
  $firstname = $_POST['first_name'];
  $middlename = $_POST['middle_name'];
  $lastname = $_POST['last_name'];
  $email= $_POST['email'];
  $mobile_no = $_POST['mobileno'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $education   = $_POST['education'];
  $gender = $_POST ['gender'];



  $connection = mysqli_connect("localhost", "root","" ,"15618223042");

  $query =  " INSERT INTO registration
                        (`first_name`, `middle_name`, `last_name`, `email`, `mobil_no`, `password`, `city`, `state`, `country`, `education`, `gender`) 
                        VALUES ('$firstname', '$middlename', '$lastname', '$email', '$mobile_no', '$password', '$city', '$state', '$country','$education', '$gender')";

//  $execute = mysqli_query($connection,$query);
// if (mysqli_query($connection,$query)) {
//   echo '
//      <div class="container">
//       <div class="page-header">
//           <h3>Registration Complete</h3>
//       </div>
//      </div>'; 
//   header( 'Location: demo.php'  );

// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
if (mysqli_query($connection, $query)) {

  
  function function_alert($message) { 
    
    
    echo "<script>alert('$message');</script>"; 
  } 
  function_alert("Record Inserted .....!");
  
  header("Location: Registration_Design.php");
  
} else {
  echo "Error: ". mysqli_error($connection);
}


mysqli_close($connection);



?>