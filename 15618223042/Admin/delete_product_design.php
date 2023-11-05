<?php
include('includes/header.php'); 
include('includes/navbar.php');

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .card-img{
        width: 100px;
        height: 100px;
    }
</style>
<body>
<?php

  $conncation = mysqli_connect("localhost","root","","15618223042");

  $query = "SELECT * FROM product_details";

  $execute_query =  mysqli_query($conncation ,$query);

  $number_record = mysqli_num_rows($execute_query);
  

?>
<div class="container-fluid">
  <div class="card shadow">
    <div class="card-header">
      <div class="row">
        <h4 class="col-md text-primary m-0 fw-bold">Product Deleted</h4>
        <div class="col-md">  
          </div>
        </div>
      </div>
    </div>
    
    <form action=product_delete_code.php method=post>
    <div class="table-responsive">
   <table  class= "table table-hover" style="width:auto" >
   <thead class="table-dark"> 
   <tr>
   <th>ID</th>
   <th>Product Name</th>
   <th>Product Description</th>
   <th>Product Category</th>
   <th>Product Price</th>
   <th>Product Sku</th>
   <th>Product Barcode</th>
   <th>Product Weight</th>
   <th>Product Dimensions</th>
   <th>Product Quantity</th>
   <th>Product Variants</th>
   <th>Shipping Info</th>
   <th>Seo Info</th>
   <th>Product Brand</th>
   <th>Product Features</th>
   <th>Product Benefites</th>
   <th>Related Products</th>
   <th>Producat Reviews</th>
   <th>Created At</th>
   <th>Image</th>
   <th>Delete</th>
  

   </tr>
   </thead> 
  
<?php
   for ($i=1;  $i <= $number_record; $i++)
   {

    $fetch_data = mysqli_fetch_row($execute_query);
   

?>
   
   <tr>
    
   <td><?= $fetch_data[0] ?></td>
   <td><?= $fetch_data[1] ?></td>
   <td><?= $fetch_data[2] ?></td>
   <td><?= $fetch_data[3] ?></td>
   <td><?= $fetch_data[4] ?></td>
   <td><?= $fetch_data[5] ?></td>
   <td><?= $fetch_data[6] ?></td>
   <td><?= $fetch_data[7] ?></td>
   <td><?= $fetch_data[8] ?></td>
   <td><?= $fetch_data[9] ?></td>
   <td><?= $fetch_data[10] ?></td>
   <td><?= $fetch_data[11] ?></td>
   <td><?= $fetch_data[12] ?></td>
   <td><?= $fetch_data[13] ?></td>
   <td><?= $fetch_data[14] ?></td>
   <td><?= $fetch_data[15] ?></td>
   <td><?= $fetch_data[16] ?></td>
   <td><?= $fetch_data[17] ?></td>
   <td><?= $fetch_data[18] ?></td>
   <td><?php echo "<img src='$fetch_data[19]' class= 'card-img'>";?></td>
   <td> <button  type=submit name='product_delete[]' class="btn btn-danger" value=<?=$fetch_data[0]?> >DELETE  </button></td>
   </tr>

    </tbody>
    <?php
   }
echo " </div>";
  echo"</table>";
//   echo "<img src='$fetch_data[19]'>";
  echo "</form>";
?>
</body>
</html>
<!-- /.container-fluid -->

