<!-- Script to determine the largest among three numbers and display the result. -->

<?php

    $a = 10;
    $b = 5;
    $c = 5;

    if ($a > $b && $a > $c) 
    {
        echo "<center> {$a} is a largest number.</center>";

    } elseif ($b > $c && $b > $a) 
    {
        echo " <center> {$b} is a largest number.</center>";

    } elseif ($c > $a && $c > $b)
    {
        echo " <center> {$c} is a largest number.</center> ";
    }
    return 0;

?>