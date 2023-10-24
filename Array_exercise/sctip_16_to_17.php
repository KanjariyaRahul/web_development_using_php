<!-- 16. Create an indexed array of cities you want to visit in the future.
17. Add a new city to your travel list from question 16. -->

<?php

    $cities = ["Ahmedabad", "Vadodara", "Surat", "Gandhinagar"];

    print_r($cities);
    echo "<br><br>";

    // Add a new city 
    array_push($cities,"Rajkot");

    // Display the updated list of cities
    echo "Add a New city in array :<br>";
    print_r($cities);

?>
