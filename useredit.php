<?php
session_start();
include("connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="bodycolor">
    <!-- navigation start -->
    <nav class="navbar fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="login.php">Staff Login</a>
    </nav>
    <!-- navigation end -->

    <!-- customer adding form start -->
    <div class="container-fluid">
        <?php
        $id = $_GET['cust_id'];
        $sql = "SELECT * FROM customers WHERE customer_id= '$id'";
        $result = mysqli_query($con, $sql);  // function performs a query against the database.
        $row = mysqli_fetch_assoc($result)
        ?>
        <div class="d-flex justify-content-center" style="margin-top:20vh;">
            <form class="col-md-4  bg-white was-validated shadow" style="padding:15px; border: 1px solid white ;border-radius: 25px;" method="POST" action="include_files/updatecustomerdb.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="customername" class="mb-2">Customer Name</label>
                    <input type="text" class="form-control" name="customername" value="<?php echo $row['customer_name']; ?>" id="customername" required />
                </div>
                <div class="form-group">
                    <label for="customeremail" class="mb-2">Customer Email</label>
                    <input type="email" class="form-control" name="customeremail" value="<?php echo $row['customer_email']; ?>" id="customeremail" required />
                </div>
                <div class="form-group">
                    <label for="customermobile" class="mb-2">Customer Mobile</label>
                    <input type="text" class="form-control" name="customermobile" value="<?php echo $row['customer_phone']; ?>" id="customermobile" required />
                </div>
                <div class="form-group">
                    <label for="customercompanyname" class="mb-2">Customer Company Name</label>
                    <input type="text" class="form-control" name="customercompanyname" value="<?php echo $row['customer_companyname']; ?>" id="customercompanyname" required />
                </div>
                <div class="form-group mt-4">
                    <div class="custom-file">
                        <img src="images/<?php echo $row['customer_image']; ?>" height="50px" width="50px" alt="<?php echo $row['customer_image']; ?>" />
                        <label for="validatedCustomFile" class="custom-file-label col-md">Select your Image</label>
                        <input type="file" class="custom-file-input" name="customerimage" id="validatedCustomFile" value="<?php echo $row['customer_image']; ?>">
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="customerid" value="<?php echo $row['customer_id']; ?>" id="customerid" required />
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <input type="reset" class="form-control btn btn-danger" value="Reset">
                    </div>
                    <div class="col-md-6">
                        <input type="submit" name="submit" class="form-control btn btn-success" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- customer adding form end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>