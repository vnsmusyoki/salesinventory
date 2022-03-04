<?php
include 'admin.php';
?>
<?php $batch_number = $unit_price = $product_amount = $description = $product_name  = $message = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="../css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="../css/toastr-btn.css">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/toastr.min.js"></script>
    <script src="../js/toastr-options.js"></script>
</head>

<body class="nav-fixed">
    <?php  include 'header.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include 'sidebar.php' ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container-xl px-4">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                        Add Product
                                    </h1>
                                    <div class="page-header-subtitle">Upload New Product from this page</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container-xl px-4 mt-n10">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Default Bootstrap Form Controls-->
                            <div id="default">
                                <div class="card mb-4">
                                    <div class="card-header">Adding New Product</div>
                                    <div class="card-body">
                                        <!-- Component Preview-->
                                        <div class="sbp-preview">
                                            <div class="sbp-preview-content">
                                                <form method="POST" action="">
                                                    <?php

                                                    if (isset($_POST["addproduct"])) {

                                                        require 'functions/add-product.php';
                                                    }
                                                    ?>
                                                    <?php echo $message; ?>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1">Product Name</label>
                                                                <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="" name="product_name" value="<?php echo $product_name; ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1">Batch
                                                                    Number</label>
                                                                <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="" name="batch_number" value="<?php echo $batch_number; ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Date of
                                                                Manufacture</label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="date" placeholder="" name="manufacture_date" />
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Date of Expiry</label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="date" placeholder="" name="expiry_date" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlSelect1">Product
                                                                    Category</label>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="product_category">
                                                                    <option value="">click to select</option>
                                                                    <option value="Electronics">Electronics</option>
                                                                    <option value="Computers">Computers</option>
                                                                    <option value="Furniture">Furniture</option>
                                                                    <option value="Food">Food</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlSelect2">Product SUb
                                                                    Category</label>
                                                                <select class="form-control" id="exampleFormControlSelect2" name="product_subcategory">
                                                                    <option value="">click to select</option>
                                                                    <option value="HP Laptops">HP Laptops</option>
                                                                    <option value="Dell Machines">Dell Machines</option>
                                                                    <option value="Beds">Beds</option>
                                                                    <option value="Closets">Closets</option>
                                                                    <option value="Cereals">Cereals</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Unit Price</label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="number" placeholder="" name="unit_price" value="<?php echo $unit_price; ?>" />
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Product Amount</label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="number" placeholder="" name="product_amount" value="<?php echo $product_amount; ?>" />
                                                        </div>

                                                    </div>


                                                    <div class="mb-0">
                                                        <label for="exampleFormControlTextarea1">Product
                                                            Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"><?php echo $description; ?></textarea>
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-primary btn-sm" type="submit" name="addproduct">Upload New Product</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <footer class="footer-admin mt-auto footer-light">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright © Dynamic Inventotry 2022</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a> ·
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
    <script src="js/litepicker.js"></script>

</body>

</html>