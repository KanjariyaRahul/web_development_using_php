<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Client</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                    $conncation = mysqli_connect("localhost","root","","15618223042");

                    $query = "SELECT * FROM  registration";

                    $execute_query =  mysqli_query($conncation ,$query);

                    $number_record = mysqli_num_rows($execute_query);

                    echo $number_record;
                    ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>   

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Product</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                    $conncation = mysqli_connect("localhost","root","","15618223042");

                    $query = "SELECT * FROM  product_details";

                    $execute_query =  mysqli_query($conncation ,$query);

                    $number_record = mysqli_num_rows($execute_query);

                    echo $number_record;
                    ?>
              </div>
            </div>
            <div class="col-auto">
            <i class=" fas  fa-box-open fa-2x text-gray-300"></i>
              
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>

 