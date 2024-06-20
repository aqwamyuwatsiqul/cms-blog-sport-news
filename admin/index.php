<?php
require 'auth.php';
include 'database.php';
?>

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
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <a href="./index.php" class="text-nowrap logo-img">
              <img src="gambar/logo.png" width="60" alt="" class="rounded"> <!-- Mengatur ukuran gambar -->
            </a>
            <span class="ms-3 fs-6 fw-bolder">Sport News</span> <!-- Memperbesar ukuran teks -->
          </div>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./article.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Article</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./writer.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Writer</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./category.php" aria-expanded="false">
                <span>
                  <i class="ti ti-category-2"></i>
                </span>
                <span class="hide-menu">Category</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="logout.php" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <div class="sb-sidenav-footer bg-light p-3 rounded">
              <div class="small text-muted">Logged in as :</div>
              <div class="text-dark"><?php echo $_SESSION["email"]; ?></div>
            </div>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="./logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""><img src="gambar/artikel.png" class="card-img-top rounded-0" alt="..."></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h5 class="fw-semibold fs-4" style="color: black; font-size: 1.5em;">Artikel</h5>
                <div class="d-flex align-items-center justify-content-between">
                  <?php
                  $sql = "SELECT * FROM article";
                  $query = mysqli_query($conn, $sql);
                  $count = mysqli_num_rows($query);
                  ?>
                  <a class="small text-dark stretched-link" href="article.php"><?php echo $count . ' Artikel'; ?></a>
                  <div class="small text-dark"><i class="fas fa-chevron-right"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""><img src="gambar/penulis.jpg" class="card-img-top rounded-0" alt="..."></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4" style="color: black; font-size: 1.5em;">Penulis</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <?php
                  $sql = "SELECT * FROM users";
                  $query = mysqli_query($conn, $sql);
                  $count = mysqli_num_rows($query);
                  ?>
                  <a class="small text-dark stretched-link" href="writer.php"><?php echo $count . ' Penulis'; ?></a>
                  <div class="small text-dark"><i class="fas fa-chevron-right"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href=""><img src="gambar/kategori.jpg" class="card-img-top rounded-0" alt="..."></a>
              </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4" style="color: black; font-size: 1.5em;">Kategori</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <?php
                  $sql = "SELECT * FROM category";
                  $query = mysqli_query($conn, $sql);
                  $count = mysqli_num_rows($query);
                  ?>
                  <a class="small text-dark stretched-link" href="category.php"><?php echo $count . ' kategori'; ?></a>
                  <div class="small text-dark"><i class="fas fa-chevron-right"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>