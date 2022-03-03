<?php
include '../db-connection.php'; 
$batch_number = mysqli_real_escape_string($conn, $_POST['batch_number']);
$manufacture_date = mysqli_real_escape_string($conn, $_POST['manufacture_date']);
$expiry_date = mysqli_real_escape_string($conn, $_POST['expiry_date']);
$product_category = mysqli_real_escape_string($conn, $_POST['product_category']); 
$product_subcategory = mysqli_real_escape_string($conn, $_POST['product_subcategory']); 
$unit_price = mysqli_real_escape_string($conn, $_POST['unit_price']);
$product_amount = mysqli_real_escape_string($conn, $_POST['product_amount']); 
$description = mysqli_real_escape_string($conn, $_POST['description']);  
$batch_length = strlen($batch_number); 
if (empty($batch_number) || empty($manufacture_date) || empty($expiry_date) || empty($product_category) || empty($product_subcategory) || empty($unit_price) || empty($product_amount) || empty($description)) {
 
    $message = "
        <script>
            toastr.error('Please Provide all the details needed');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z0-9 ]*$/", $batch_number)) {
    $message = "
        <script>
            toastr.error('Provided an invalid batch number characters');
        </script>
    ";
}else if ($batch_length !== 6) {
    $message = "
    <script>
        toastr.error('Batch number must have 6 characters.');
    </script>
";
}else {
    $checkbatch = "SELECT *  FROM `product` WHERE `product_batch_number` = '$batch_number'";
    $querybatch = mysqli_query($conn, $checkbatch);
    $checkbatchrows = mysqli_num_rows($querybatch);
    if ($checkbatchrows >= 1) {
        $message = "
        <script>
            toastr.error('Batch Number already exists. Please confirm your number again .');
        </script>";
    } else {
      

            $checkusername = "SELECT *  FROM `login` WHERE `login_username` = '$username'";
            $queryusername = mysqli_query($conn, $checkusername);
            $checkusernamerows = mysqli_num_rows($queryusername);
            if ($checkusernamerows >= 1) {
                $message = "
                <script>
                    toastr.error('Username already exists. Please confirm your username  again .');
                </script>";
            } else {
                $password = md5($password);
                $insertproduct = "INSERT INTO `product`(`product_category`, `product_sub_category`, `product_description`, `product_date_of_manufacture`, `product_batch_number`, `product_expiry_date`, `product_unit_price`, `product_amount`) VALUES ('$product_category','$product_subcategory','$description','$manufacture_date','$batch_number','$expiry_date','$unit_price','$product_amount')";
                $querylogin = mysqli_query($conn, $insertproduct);
                $lastid =  mysqli_insert_id($conn);
                if ($querylogin) { 
                        $message = "
                            <script>
                            toastr.success('Product Uploaded succesfully.');
                        </script>";
                        echo "<script>window.location.replace('all-products.php');</script>";
                    }
                }
            
        }
    
}