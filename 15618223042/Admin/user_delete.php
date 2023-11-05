<?php
    $execute_query = $_POST['delete'];
    $connection=mysqli_connect("localhost","root","","15618223042");

    foreach($execute_query as $myquery){
        $query="DELETE FROM `registration`  where reg_id='$myquery'";
        $execute_query=mysqli_query($connection,$query);

       
    }
    function function_alert($message) { 
        
        
        echo "<script>alert('$message');</script>"; 
    } 
    function_alert("Record Inserted .....!");
    header("Location: ./user_management.php ");
?>