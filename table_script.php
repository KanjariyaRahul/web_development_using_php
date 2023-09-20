<?php 
echo "<table border=1>";
 $letter = 'A';
 for($i=1; $i<=7; $i++)
 {
    echo"<tr>";
    for ($j=1;$j<=4; $j++)
    {

        if($letter < 'z')
        {
            echo '<td>'.$letter.'</td>';
            $letter++;
        if($letter=='AA')
        {
            break;
        }
            
        }
        else
        {
           
            echo '<td></td>';
            
        }
    }
    echo '<tr>';
 }
 echo "</table>";
?>
