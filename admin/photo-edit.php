<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<?php include('conn.php');

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $res->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    if ($_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/$image");
    } else {
        $image = $row['image'];
    }

    $conn->query("UPDATE products SET name='$name', price='$price', image='$image' WHERE id=$id");
    header("Location: view-photo.php");
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
                                    <h4 class="card-title"> <i class="bi bi-plus-circle me-2"></i>Edit Product</h4>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control mb-3" required>
                                        <input type="text" name="price" value="<?= $row['price'] ?>" class="form-control mb-3" required>
                                        <p>Current Image: <img src="uploads/<?= $row['image'] ?>" width="80" /></p>
                                        <input type="file" name="image" class="form-control mb-3">
                                        <button name="update" class="btn btn-success">Update</button>
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