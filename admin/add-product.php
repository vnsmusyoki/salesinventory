<?php
include 'admin.php';
?>
<?php $batch_number = $unit_price = $product_amount = $description   = $message = ''; ?>
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
    <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
        <!-- Sidenav Toggle Button-->
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>

        <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.html">SB Admin Pro</a>
        <!-- Navbar Search Input-->
        <!-- * * Note: * * Visible only on and above the lg breakpoint-->
        <form class="form-inline me-auto d-none d-lg-block me-3">
            <div class="input-group input-group-joined input-group-solid">
                <input class="form-control pe-0" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-text"><i data-feather="search"></i></div>
            </div>
        </form>
        <!-- Navbar Items-->
        <ul class="navbar-nav align-items-center ms-auto">
            <!-- Documentation Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-md-block me-3">
                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <i class="fas fa-chevron-right dropdown-arrow"></i>
                </a>

            </li>
            <!-- Navbar Search Dropdown-->
            <!-- * * Note: * * Visible only below the lg breakpoint-->
            <li class="nav-item dropdown no-caret me-3 d-lg-none">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                <!-- Dropdown - Search-->
                <div class="dropdown-menu dropdown-menu-end p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                    <form class="form-inline me-auto w-100">
                        <div class="input-group input-group-joined input-group-solid">
                            <input class="form-control pe-0" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-text"><i data-feather="search"></i></div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- Alerts Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
            </li>
            <!-- Messages Dropdown-->
            <li class="nav-item dropdown no-caret d-none d-sm-block me-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
            </li>
            <!-- User Dropdown-->
            <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="assets/img/illustrations/profiles/profile-1.png" /></a>
                <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="assets/img/illustrations/profiles/profile-1.png" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name"><?php echo $globaluserfullname; ?></div>
                            <div class="dropdown-user-details-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4a2b8a1bab594b5bbb8fab7bbb9"><?php echo $globaluseremail; ?></a>
                            </div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="account-security.php">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Update Account
                    </a>
                    <a class="dropdown-item" href="logout.php">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
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