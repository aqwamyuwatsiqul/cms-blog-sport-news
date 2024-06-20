<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Sport News</title>
  <link rel="shortcut icon" type="image/png" href="gambar/logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="gambar/logo.png" width="180" alt="" class="rounded">
                </a>
                <p class="text-center">Halaman Register Admin</p>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $name = $_POST["name"];
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                  $errors = array();

                  if (empty($name) or empty($email) or empty($password)) {
                    array_push($errors, "All fields are required");
                  }
                  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email is not valid");
                  }
                  if (strlen($password) < 8) {
                    array_push($errors, "Password must be at least 8 charactes long");
                  }

                  include "database.php";
                  $sql = "SELECT * FROM users WHERE email = ?";
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "s", $email);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $rowCount = mysqli_num_rows($result);
                  if ($rowCount > 0) {
                    array_push($errors, "Email already exists!");
                  }

                  if (count($errors) > 0) {
                    foreach ($errors as $error) {
                      echo "<div class='alert alert-danger'>$error</div>";
                    }
                  } else {
                    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                  }

                  mysqli_close($conn);
                }
                ?>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="textHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-2 mb-0 fw-bold">Already have an account?</p>
                    <a class="text-primary fs-2 fw-bold ms-2" href="./login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>