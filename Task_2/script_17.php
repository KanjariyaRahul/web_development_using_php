<!-- Create a PHP script to check if a given year is a leap year and display the result. -->

<?php  
$year = 2023;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
?> 