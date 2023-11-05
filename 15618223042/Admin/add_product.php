<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body id="page-top">
    
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
       
            <div class="text-primary" id="content">
                <div class="container-fluid add-new-crop-form">
                    <div class="card p-2">
                        <h2>Enter Product Details</h2>
                        <hr>
                        <form action="add_product_code.php" method="post" enctype="multipart/form-data" id="add-crop-form">
                            
                            <div class="mb-3">
                                <label for="product_name">Product Name </label>
				                <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name" name="product_name">
                            </div>

                            <div class="mb-3">
                                <label for="product_description">Product Description </label>
				                <input type="text" class="form-control" id="product_description" placeholder="Enter Product Description" name="product_description">
                            </div>
                            <div class="mb-3">
                                <label for="product_caegory">Product Category </label>
				                <input type="text" class="form-control" id="product_caegory" placeholder="Enter Product Caegory" name="product_caegory">
                            </div>
                            <div class="mb-3">
                                <label for="product_price">Product Price </label>
				                <input type="number" class="form-control" id="product_price" placeholder="Enter Product Price" name="product_price">
                            </div>

                            <div class="mb-3">
                                <label for="product_sku">Product SKU </label>
				                <input type="text" class="form-control" id="product_sku" placeholder="Enter Product SKU" name="product_sku">
                            </div>

                            <div class="mb-3">
                                <label for="product_barcode">Product Barcode </label>
				                <input type="text" class="form-control" id="product_barcode" placeholder="Enter Product Barcode" name="product_barcode">
                            </div>

                            <div class="mb-3">
                                <label for="product_weight">Product Weight </label>
				                <input type="number" class="form-control" id="product_weight" placeholder="Enter Product Weight" name="product_weight">
                            </div>

                            <div class="mb-3">
                                <label for="product_dimensions">Product Dimensions </label>
				                <input type="text" class="form-control" id="product_dimensions" placeholder="Enter Product Dimensions" name="product_dimensions">
                            </div>

                            <div class="mb-3">
                                <label for="product_quantity">Product Quantity</label>
				                <input type="number" class="form-control" id="product_quantity" placeholder="Enter Product Quantity" name="product_quantity">
                            </div>

                            <div class="mb-3">
                                <label for="product_variants">Product Variants</label>
				                <input type="text" class="form-control" id="product_variants" placeholder="Enter Product Variants" name="product_variants">
                            </div>

                            <div class="mb-3">
                                <label for="shipping_info"> Shipping Info</label>
				                <input type="text" class="form-control" id="shipping_info" placeholder="Enter  Shipping Info" name="shipping_info">
                            </div>

                            <div class="mb-3">
                                <label for="seo_info"> Seo Info</label>
				                <input type="text" class="form-control" id="seo_info" placeholder="Enter  SeoInfo" name="seo_info">
                            </div>

                            <div class="mb-3">
                                <label for="product_brand"> Product Brand</label>
				                <input type="text" class="form-control" id="product_brand" placeholder="Enter Product Brand" name="product_brand">
                            </div>

                            <div class="mb-3">
                                <label for="product_features"> Product Features</label>
				                <input type="text" class="form-control" id="product_features" placeholder="Enter Product Features" name="product_features">
                            </div>

                            <div class="mb-3">
                                <label for="product_benefites"> Product Benefites</label>
				                <input type="text" class="form-control" id="product_benefites" placeholder="Enter Product Benefites" name="product_benefites">
                            </div>

                            <div class="mb-3">
                                <label for="related_products"> Related Products</label>
				                <input type="text" class="form-control" id="related_products" placeholder="Enter Related Products" name="related_products">
                            </div>

                            <div class="mb-3">
                                <label for="product_reviews">Product Reviews</label>
				                <input type="text" class="form-control" id="product_reviews" placeholder="Enter Product Reviews" name="product_reviews">
                            </div>

                            <div class="mb-3">
                                <label for="image_filenames">Image Filenames</label>
			                    <input type="file" class="form-control" id="image_filenames" placeholder="Enter Image Filenames" name="image_filenames">
                            </div>

                            <hr>
                            <button type="reset" class="btn btn-secondary">Clear Form</button>
                            <button  type="submit" class="btn btn-primary float-end">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div id="wrapper-1"><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div id="wrapper-2"><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
</body>
</html>
<!-- /.container-fluid -->