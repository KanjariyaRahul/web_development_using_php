<!-- Script to calculate the area of a circle based on the given radius and display the result. -->

<?php
      
function findArea( $r)
{
    $PI =3.142;
    return $PI * $r * $r;
}
 
echo("Area is ");
echo(findArea(5));
return 0;
  

?>