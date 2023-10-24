<!-- Remove a specific number of your choice from the array and display the updated array. -->

<?php  
    $number = array(0,1,2,3,4,5); 
    
    echo "Original array : "; 
    print_r($number);
    echo "<br><br>";

    // remove item at index 1 in array 

     array_splice($number, 1, 1);  
    
     echo " After remove a specific number and display : ";

    // unset($number[1]);

    print_r($number);
?> 