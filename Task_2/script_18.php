<?php

    $num = 4;
    $rendom =rand(1,10);

    echo "You enterd number : $num </br>";
    echo "Random number : $rendom";
    echo "</br>";
    if($num==$rendom)
        echo "Your number is match with rendom number.";
    else 
        echo "Your numbers is not match with rendom number.";

?>