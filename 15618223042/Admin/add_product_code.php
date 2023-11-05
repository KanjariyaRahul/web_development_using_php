

<?php
$Product_name = $_POST['product_name'];
$Product_description = $_POST['product_description'];
$Product_category = $_POST['product_caegory'];
$Product_price = $_POST['product_price'];
$Product_sku = $_POST['product_sku'];
$Product_barcode = $_POST['product_barcode'];
$Product_weight = $_POST['product_weight'];
$Product_dimensions = $_POST['product_dimensions'];
$Product_quantity = $_POST['product_quantity'];
$Product_variants = $_POST['product_variants'];
$Shipping_info = $_POST['shipping_info'];
$Seo_info = $_POST['seo_info'];
$Product_brand = $_POST['product_brand'];
$Product_feature = $_POST['product_features'];
$product_benefites = $_POST['product_benefites'];
$Related_product = $_POST['related_products'];
$Product_reviews = $_POST['product_reviews'];
$filename = $_FILES["image_filenames"]["name"];
$tempname = $_FILES["image_filenames"]["tmp_name"];
$folder = "./images/" . $filename;
move_uploaded_file($tempname,$folder);



$connection = mysqli_connect("localhost","root","","15618223042");

$insert = "INSERT INTO `product_details`(`product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimensions`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benefites`, `related_products`, `product_reviews`,`image_filenames`)
 VALUES ('$Product_name','$Product_description','$Product_category','$Product_price','$Product_sku','$Product_barcode','$Product_weight','$Product_dimensions','$Product_quantity','$Product_variants','$Shipping_info','$Seo_info','$Product_brand','$Product_feature','$product_benefites','$Related_product','$Product_reviews','$folder')";

$query =mysqli_query($connection, $insert);
if($query == true){

  echo "<script>alert('Product Deleted Successfully.....!');</script>";
  // $message ='Product Inserted Successfully...............!'; 
  // successAlert("Success!","This is a Bootstrap success alert");
  echo "<script>window.location= './add_product.php'</script>";
}
else
{
  echo "<script>alert('Falied To Insert Record......... !');</script>";
 
  echo "<script>window.location= './add_product.php'</script>";
}
?>