<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<?php include('conn.php'); ?>
<?php

$username = $_SESSION['username'];
$success = $error = '';

if (isset($_POST['change'])) {
    $current = $_POST['current_password'];
    $new = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    // Get user
    $res = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $res->fetch_assoc();

    // Check current password
    if ($user['password'] !== $current) {
        $error = "Current password is incorrect!";
    } elseif ($new !== $confirm) {
        $error = "New password and confirm password do not match!";
    } else {
        // Update password
        $conn->query("UPDATE users SET password='$new' WHERE username='$username'");
        $success = "Password updated successfully!";
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
                                    <div class="container mt-5" style="max-width: 500px;">
                                        <h3><i class="bi bi-shield-lock me-2"></i>Change Password</h3>

                                        <?php if ($success): ?>
                                            <div class="alert alert-success"><?= $success ?></div>
                                        <?php endif; ?>

                                        <?php if ($error): ?>
                                            <div class="alert alert-danger"><?= $error ?></div>
                                        <?php endif; ?>

                                        <form method="POST">
                                            <div class="mb-3">
                                                <label class="form-label"><i class="bi bi-lock-fill me-1"></i>Current Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="current_password" class="form-control password-field" required />
                                                    <span class="input-group-text toggle-password" style="cursor:pointer;"><i class="bi bi-eye-slash"></i></span>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><i class="bi bi-lock me-1"></i>New Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="new_password" class="form-control password-field" required />
                                                    <span class="input-group-text toggle-password" style="cursor:pointer;"><i class="bi bi-eye-slash"></i></span>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"><i class="bi bi-lock me-1"></i>Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" name="confirm_password" class="form-control password-field" required />
                                                    <span class="input-group-text toggle-password" style="cursor:pointer;"><i class="bi bi-eye-slash"></i></span>
                                                </div>
                                            </div>

                                            <button name="change" class="btn btn-primary">
                                                <i class="bi bi-arrow-repeat me-1"></i>Update Password
                                            </button>
                                            <a href="index.php" class="btn btn-secondary">Back</a>
                                        </form>
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

        <!--Toggle Password Script -->
        <script>
            const toggleIcons = document.querySelectorAll('.toggle-password');

            toggleIcons.forEach(icon => {
                icon.addEventListener('click', () => {
                    const input = icon.parentElement.querySelector('.password-field');
                    const iconTag = icon.querySelector('i');

                    if (input.type === 'password') {
                        input.type = 'text';
                        iconTag.classList.remove('bi-eye-slash');
                        iconTag.classList.add('bi-eye');
                    } else {
                        input.type = 'password';
                        iconTag.classList.remove('bi-eye');
                        iconTag.classList.add('bi-eye-slash');
                    }
                });
            });
        </script>
    </div>
</body>

</html>
