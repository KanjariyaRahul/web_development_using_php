<!-- Develop a PHP script that sorts an array of integers in ascending order using the sort()
function. -->

<?php

$numbers=array(10,1,20,5,3);    
sort($numbers);  
foreach( $numbers as $n )    
{    
  echo "$n<br />";    
}  

?>
