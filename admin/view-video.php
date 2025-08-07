<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include('conn.php'); ?>


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
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
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
                        <div class="col-lg-10 offset-lg-1">
                            <div class="card">
                                <div class="card-header">
                                    <h5><i class="bi bi-bag-check me-2 py-3"></i>Product List</h5>
                                    <a href="video-add.php" class="btn btn-primary mb-3"><i class="bi bi-plus-circle me-1"></i>Add New</a>

                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Video url</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $res = $conn->query("SELECT * FROM videos");
                                                while ($row = $res->fetch_assoc()) {
                                                    echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['link']}</td>
                    <td>
                        <a href='video-edit.php?id={$row['id']}' class='btn btn-warning btn-sm'><i class='bi bi-pencil-square'></i></a>
                        <a href='delete-video.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Delete this Photo?\")'><i class='bi bi-trash'></i></a>
                    </td>
                </tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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
    <script src="js/perfect-scrollbar.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/table-datatable.js"></script>
        </div>

</body>

</html>