<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include('conn.php'); ?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Handle image upload
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    $uploadPath = "uploads/" . $image;
    move_uploaded_file($tmp, $uploadPath);

    // Insert into DB
    $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
    if ($conn->query($sql)) {
        $success = "Product added successfully!";
    } else {
        $error = "Insert failed: " . $conn->error;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content unchanged) ... -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="css/simplebar.css" rel="stylesheet" />
    <link href="css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="css/metisMenu.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-extended.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="css/dark-theme.css" rel="stylesheet" />
    <link href="css/semi-dark.css" rel="stylesheet" />
    <link href="css/header-colors.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/validation.css" />
       <script src="js/themeColor.js"></script>
    
</head>

<body>
    <div class="wrapper">
        <?php include_once("include/left.php") ?>
        <?php include_once("include/header.php") ?>

        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- ... (breadcrumb and profile display unchanged) ... -->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Dashboard</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item active" aria-current="page">Add Photos</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> <i class="bi bi-plus-circle me-2"></i> Add Photo</h4>
                            

                                    <?php if (isset($success)) echo "<div class='alert alert-success'>$success</div>"; ?>
                                    <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

                                    <form method="post" enctype="multipart/form-data" class="mt-4">
                                        <div class="mb-3">
                                            <label class="form-label"><i class="bi bi-card-text me-1"></i>Product Name</label>
                                            <input type="text" name="name" required class="form-control" placeholder="Enter product name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><i class="bi bi-currency-rupee me-1"></i>Price</label>
                                            <input type="text"  name="price" required class="form-control" placeholder="Enter price">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"><i class="bi bi-image me-1"></i>Product Image</label>
                                            <input type="file" name="image" required class="form-control">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-success">
                                            <i class="bi bi-upload me-1"></i>Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>







    <?php include_once("include/footer.php") ?>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/additional-methods.min.js"></script>
    <script src="../js/checkvalidation.js"></script>
    </div>
</body>

</html>