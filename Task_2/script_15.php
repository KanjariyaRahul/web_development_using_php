<!-- Write a PHP script to find the largest of three numbers entered by the user. -->

<!DOCTYPE html>
<html>

<head>
    <title>Find Largest Number</title>
</head>
<center>
<body>
    <form method="POST">
        <h3>Enter three numbers:</h3><br>

        Number 1: <input type="text" name="num1"><br>
        Number 2: <input type="text" name="num2"><br>
        Number 3: <input type="text" name="num3"><br><br>
       <input type="submit" name="submit" value="Submit"><br>
    </form><br>
</body>
</center>

</html>


<?php
if (isset($_POST['submit'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];

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
}
?>

