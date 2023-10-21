<!-- Write a PHP script to reverse the elements of an array using the array_reverse() function -->

<?php

$numbers=array(10,1,20,5,3);

$b= array_reverse($numbers);

foreach($b as $a)
{

    echo $a."<br>";
}

?>
