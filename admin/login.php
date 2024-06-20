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
                <p class="text-center">Halaman Login Admin</p>

                <?php
                session_start();
                if (isset($_SESSION["user_id"])) {
                  header("Location: index.php");
                  exit;
                }

                if (isset($_POST["login"])) {
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  require_once "database.php";

                  $sql = "SELECT * FROM users WHERE email=?";
                  $stmt = mysqli_prepare($conn, $sql);
                  mysqli_stmt_bind_param($stmt, "s", $email);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                  if ($user) {
                    if (password_verify($password, $user["password"])) {
                      $_SESSION["user_id"] = $user["id_users"];
                      $_SESSION["email"] = $email;
                      $_SESSION["password"] = $password;
                      header("Location: index.php");
                      exit;
                    } else {
                      echo "<div class='alert alert-danger'>Password does not match</div>";
                    }
                  } else {
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                  }
                }
                ?>
                <?php
                // require 'database.php';
                // session_start();

                // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //   $email = $_POST['email'];
                //   $password = $_POST['password'];

                //   $sql = "SELECT * FROM users WHERE email='$email'";
                //   $result = $conn->query($sql);

                //   if ($result->num_rows > 0) {
                //     $row = $result->fetch_assoc();
                //     if (password_verify($password, $row['password'])) {
                //       $_SESSION['loggedin'] = TRUE;
                //       $_SESSION['id_penulis'] = $row['id_penulis'];
                //       $_SESSION['nama_penulis'] = $row['nama_penulis'];
                //       header('Location: index.php');
                //     } else {
                //       echo "Password salah!";
                //     }
                //   } else {
                //     echo "Email tidak terdaftar!";
                //   }
                //   $_SESSION['email'] = $email;
                //   $_SESSION['password'] = $password;
                // }
                ?>
                <form action="login.php" method="post">
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <button type="submit" value="login" name="login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-2 mb-0 fw-bold">Don't have an account yet?</p>
                    <a class="text-primary fs-2 fw-bold ms-2" href="./register.php">Create an account</a>
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