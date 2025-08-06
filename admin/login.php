<?php
session_start();
include "conn.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h4 class="mb-3 text-center">Login</h4>
          <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
          <form method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required />
            </div>
            <div class="mb-3 position-relative">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required />
              <button type="button" class="btn btn-sm btn-outline-secondary position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword()">Show</button>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function togglePassword() {
  const passwordField = document.getElementById("password");
  const type = passwordField.type === "password" ? "text" : "password";
  passwordField.type = type;
}
</script>
</body>
</html>
