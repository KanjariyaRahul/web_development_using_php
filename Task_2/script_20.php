<!-- Script to find the factorial of a given number and display the result. -->

<?php 

$num = 5;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is : $factorial";  

?>  