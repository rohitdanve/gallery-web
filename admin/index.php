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
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="container mt-5">
          <h4 class="mb-4"><i class="bi bi-box-seam me-2"></i>Latest 3 Photos</h4>
          <div class="row">
            <?php
            $productQuery = $conn->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 3");
            while ($product = $productQuery->fetch_assoc()) {
              echo '
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="uploads/' . $product['image'] . '" class="card-img-top" alt="' . htmlspecialchars($product['name']) . '" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title">' . htmlspecialchars($product['name']) . '</h5>
              <p class="card-text fw-bold text-success">₹' . number_format($product['price'], 2) . '</p>
            </div>
          </div>
        </div>';
            }
            ?>
          </div>
        </div>

        <div class="container mt-5">


          <hr class="my-5">

          <h3 class="mb-4">🎬 Latest 3 Videos</h3>
          <div class="row">
            <?php
            $videoQuery = $conn->query("SELECT * FROM videos ORDER BY created_at DESC LIMIT 3");
            while ($video = $videoQuery->fetch_assoc()) {
              // Extract YouTube embed URL
              $videoURL = $video['link'];
              $embedURL = preg_replace(
                "/^.*(?:youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=)([^#\&\?]*).*/",
                "https://www.youtube.com/embed/$1",
                $videoURL
              );

              echo '<div class="col-md-4 media-card">
                <div class="card h-100 shadow-sm">
                  <iframe class="card-img-top" src="' . $embedURL . '" frameborder="0" allowfullscreen style="height: 200px;"></iframe>
                  <div class="card-body">
                    <h5 class="card-title
                </div>';
            }
            ?>
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