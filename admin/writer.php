<?php
require 'auth.php';
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
            <?php
            include "database.php";

            // Handle Update Request
            if (isset($_POST['simpan'])) {
                $id_users = $_POST['id_users'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                if ($id_users) {
                    // Update existing record
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "UPDATE users SET name='$name', email='$email', password='$passwordHash' WHERE id_users='$id_users'";
                } else {
                    // Insert new record
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$passwordHash')";
                }

                if (mysqli_query($conn, $sql)) {
                } else {
                }
            }

            if (isset($_POST['hapus'])) {
                $id_users = $_POST['id_users'];
                $sql = "DELETE FROM users WHERE id_users='$id_users'";
                if (mysqli_query($conn, $sql)) {
                } else {
                }
            }

            ?>

            <div class="container-fluid">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Data Penulis</h5>
                            <a href="register.php" class="btn btn-primary mb-3">
                                Tambah Data
                            </a>
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">No</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Nama Penulis</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Email</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Aksi</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM users ORDER BY id_users DESC";
                                        $q = mysqli_query($conn, $sql);
                                        $nomor = 1;
                                        while ($r = mysqli_fetch_array($q)) {
                                            $id_users = $r['id_users'];
                                            $name = $r['name'];
                                            $email = $r['email'];
                                        ?>
                                            <tr>
                                                <td scope="row"><?php echo $nomor++; ?></td>
                                                <td scope="row"><?php echo $name; ?></td>
                                                <td scope="row"><?php echo $email; ?></td>
                                                <td scope="row">
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#writerModal" onclick="editModal('<?php echo $id_users ?>', '<?php echo $name ?>', '<?php echo $email ?>')">Edit</button>
                                                    <button name="hapus" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?php echo $id_users ?>">Hapus</button>
                                                </td>
                                            </tr>

                                            <!-- Modal Hapus Penulis -->
                                            <div class="modal fade" id="hapusModal<?php echo $id_users; ?>" tabindex="-1" aria-labelledby="hapusModalLabel<?php echo $id_users; ?>" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="hapusModalLabel<?php echo $id_users; ?>">Konfirmasi Hapus</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus penulis dengan nama <?php echo "<b>" . $name . "</b>"; ?>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="post" action="">
                                                                <input type="hidden" name="id_users" value="<?php echo $id_users; ?>">
                                                                <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Update Penulis-->
                <div class="modal fade" id="writerModal" tabindex="-1" aria-labelledby="writerModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="writerModalLabel">Create / Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="writerForm" action="" method="POST">
                                    <input type="hidden" id="id_users" name="id_users">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Penulis</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="mb-4 mt-3 d-flex justify-content-end gap-3">
                                        <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                                        <button class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function editModal(id_users, name, email) {
                    document.getElementById('id_users').value = id_users;
                    document.getElementById('name').value = name;
                    document.getElementById('email').value = email;
                    document.getElementById('password').value = '';
                }

                function validateForm() {
                    const password = document.getElementById('password').value;
                    if (!password) {
                        alert('Password harus diisi');
                        return false;
                    }
                    return true;
                }
            </script>

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