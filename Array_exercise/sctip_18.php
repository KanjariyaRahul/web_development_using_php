
<!-- Remove a city of your choice from the array and display the updated list. -->

<?php  

    $cities = ["Ahmedabad", "Vadodara", "Surat", "Gandhinagar"];

    print_r($cities);
    echo "<br><br>";


    // remove item at index 1 in array 

     array_splice($cities, 2    , 1);  
    
     echo " After remove a city  and display : ";

    // unset($number[1]);

    print_r($cities);
    
?> 