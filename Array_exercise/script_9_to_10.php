<!-- 9. Sort an array of words in alphabetical order.
10. Sort the array from question 9 in reverse alphabetical order. -->

<?php

    $fruits = ["banana", "apple", "cherry", "mano", "kiwi"];
    
    // Sort the array in alphabetical order
    
    sort($fruits);
    
    // Display the array in alphabetical order
    echo "Alphabetical Order :<br>";
    print_r($fruits);
    echo "<br><br>";
    
    // 10 - Sort the array in reverse alphabetical order
    rsort($fruits);
    
    echo "10 - Reverse Alphabetical Order :<br>";
    print_r($fruits);
?>
