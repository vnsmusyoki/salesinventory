<?php
include 'admin.php';
?>
<?php $purchase_date = $purchase_returns = $unit_price = $quantity   = $message = ''; ?>
<?php
include '../db-connection.php';
$purchaserecord = $_GET['purchases'];
global $purchaserecord;
$purchases = "SELECT * FROM `purchases`";
$querypurchases = mysqli_query($conn, $purchases);
$purchasesrows = mysqli_num_rows($querypurchases);
if ($purchasesrows >= 1) {
    $count = 1;
    while ($fetch  = mysqli_fetch_assoc($querypurchases)) {
        $globaldate = $fetch['purchases_date'];
        $supplier = $fetch['purchases_supplier_id'];
        $product = $fetch['purchases_product_id'];
        $globalquantity = $fetch['purchases_quantity'];
        $globalunitprice = $fetch['purchases_product_unit_price'];
        $globalreturns = $fetch['purchases_returns'];
        $tamount = $fetch['purchases_total_amount'];
        $purchaseid = $fetch['purchases_id'];

        $product = "SELECT * FROM `product` WHERE `product_id`='$product'";
        $queryproduct = mysqli_query($conn, $product);
        $productrows = mysqli_num_rows($queryproduct);
        if ($productrows >= 1) {
            $count = 1;
            while ($fetch  = mysqli_fetch_assoc($queryproduct)) {
                $productname = $fetch['product_name'];
            }
        }

        $suppliercheck = "SELECT * FROM `supplier` WHERE `supplier_id`='$supplier'";
        $querysuppliercheck = mysqli_query($conn, $suppliercheck);
        $suppliercheckrows = mysqli_num_rows($querysuppliercheck);
        if ($suppliercheckrows >= 1) {
            $count = 1;
            while ($fetch  = mysqli_fetch_assoc($querysuppliercheck)) {
                $suppliercontact = $fetch['supplier_contact'];
                $suppliername = $fetch['supplier_name'];
            }
        }

        global $globaldate; global $globalquantity; global $globalunitprice; global $globalreturns; 
    }
}
?>
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
    <?php include 'header.php'; ?>
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
                                        Edit Purchases
                                    </h1>
                                    <div class="page-header-subtitle">Edit Purchases</div>
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
                                    <div class="card-header">Edit Purchases</div>
                                    <div class="card-body">
                                        <!-- Component Preview-->
                                        <div class="sbp-preview">
                                            <div class="sbp-preview-content">
                                                <form method="POST" action="">
                                                    <?php
                                                    if (isset($_POST["addsupplier"])) {

                                                        require 'functions/edit-purchase.php';
                                                    }
                                                    ?>
                                                    <?php echo $message; ?>
                                                    <div class="row">
                                                        <div class="col-lg-6">

                                                            <div class="mb-3">
                                                                <label for="exampleFormControlSelect1">
                                                                    Supplier Name</label>
                                                                <select class="form-control" id="exampleFormControlSelect1" name="supplier_id">
                                                                    <option value="">click to select</option>
                                                                    <?php
                                                                    include '../db-connection.php';

                                                                    $suppliers = "SELECT * FROM `supplier`";
                                                                    $querysuppliers = mysqli_query($conn, $suppliers);
                                                                    $suppliersrows = mysqli_num_rows($querysuppliers);
                                                                    if ($suppliersrows >= 1) {
                                                                        $count = 1;
                                                                        while ($fetch  = mysqli_fetch_assoc($querysuppliers)) {
                                                                            $supplierid = $fetch['supplier_id'];
                                                                            $name = $fetch['supplier_name'];
                                                                            echo "<option value='$supplierid'>$name</option>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="exampleFormControlSelect1">Product
                                                                Name</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="product_id">
                                                                <option value="">click to select</option>
                                                                <?php
                                                                include '../db-connection.php';

                                                                $suppliers = "SELECT * FROM `product`";
                                                                $querysuppliers = mysqli_query($conn, $suppliers);
                                                                $suppliersrows = mysqli_num_rows($querysuppliers);
                                                                if ($suppliersrows >= 1) {
                                                                    $count = 1;
                                                                    while ($fetch  = mysqli_fetch_assoc($querysuppliers)) {
                                                                        $productid = $fetch['product_id'];
                                                                        $name = $fetch['product_name'];
                                                                        echo "<option value='$supplierid'>$name</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Purchase Date</label></label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="date" placeholder="" name="purchase_date" value="<?php echo $globaldate; ?>" />
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Quantity</label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="number" placeholder="" name="quantity" value="<?php echo $globalquantity; ?>" />
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Unit Price</label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="" name="unit_price" value="<?php echo $globalunitprice; ?>" />
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="exampleFormControlInput1">Purchase Returns </label>
                                                            <input class="form-control" id="exampleFormControlInput1" type="text" placeholder="" name="purchase_returns" value="<?php echo $globalreturns; ?>" />
                                                        </div>
                                                        <input type="hidden" name="purchaserecord" value="<?php echo $purchaserecord; ?>">
                                                    </div>
                                                    <br>
                                                    <button class="btn btn-danger btn-sm" type="submit" name="addsupplier">Edit Purchase</button>
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
                        <div class="col-md-6 small">Copyright ?? Dynamic Inventotry 2022</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a> ??
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