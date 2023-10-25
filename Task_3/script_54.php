<!-- Create a PHP script that extracts a specific column from a multidimensional array using
the array_column() function. -->

<?php

    $student = array(array('id' => 101, 'name' => 'rahul', 'age' => 20 ),
                     array('id' => 201, 'name' => 'paras', 'age' => 20 ),
                     array('id' => 301, 'name' => 'mehul', 'age' => 21 ),
                     array('id' => 401, 'name' => 'jay', 'age' => 19 )
                );

    $name = array_column($student ,'name');

    print_r($name);

?>