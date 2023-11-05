<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<?php
    $execute_query = $_POST['product_delete'];
    $connection=mysqli_connect("localhost","root","","15618223042");

    foreach($execute_query as $myquery){
        $query="DELETE FROM `product_details`  where product_id='$myquery'";
        $execute_query=mysqli_query($connection,$query); 
    }

    if($query == true){

        echo "<script class=alert alert-success>alert('Product Deleted Successfully.....!');</script>";
        // echo"<div class=alert alert-success role=alert> This is a success alert—check it out!</div>";
        echo "<script>window.location= './delete_product.php'</script>";
    }
    else
    {
        echo "<script>alert('Falied To Product Deleted......... !');</script>";
        echo "<script>window.location= './delete_product.php'</script>";
    }
    
?>
</body>
</html>