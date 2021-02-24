<?php
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
        <a class="navbar-brand" href="include_files/logout.php">Logout</a>
    </nav>
    <!-- navigation end -->

    <!-- customer adding form start -->
    <div class="" style="margin-top:10vh;">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Phone</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Customer Company</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM customers";
                $result = mysqli_query($con, $sql);  // function performs a query against the database.
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><img src="images/<?php echo $row['customer_image']; ?>" height="50px" width="50px" alt="<?php echo $row['customer_image']; ?>" /></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['customer_phone']; ?></td>
                        <td><?php echo $row['customer_email']; ?></td>
                        <td><?php echo $row['customer_companyname']; ?></td>
                        <td><a href="useredit.php?cust_id=<?php echo $row['customer_id']; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="include_files/deletecustomer.php?cust_id=<?php echo $row['customer_id']; ?>" class="btn btn-danger" onclick="return confirm ('Are You Sure?');">Delete</a></td>
                    </tr>
                <?php }
                mysqli_close($con);
                ?>
            </tbody>
        </table>
    </div>
    <!-- customer adding form end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>