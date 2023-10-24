<!--12. Create an associative array representing a person's details, including name, age, and email.
13. Access and display the person's age from the associative array created in question 12.
14. Remove the email element from the associative array and display the updated array. -->

<?php

    // Create an associative array with person's details
    $person = [
        "name" => "Rahul",
        "age" => 20,
        "email" => "rahulkanjariya9265@gmail.com",
    ];
    // print orignal array
    print_r($person);
    echo "<br><br>";
    
    // Access and display the person's age
    
    echo " Access and display the person's age : " . $person["age"] . "<br><br>";
    
    // Remove the email element from the associative array
    
    unset($person["email"]);
    
    // Display the updated array
    
    echo "Updated Array :<br>";
    print_r($person);
?>
