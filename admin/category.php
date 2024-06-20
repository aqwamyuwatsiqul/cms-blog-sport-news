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
      $nama_kat = "";
      $keterangan = "";
      $sukses = "";
      $error = "";

      if (isset($_GET['op'])) {
        $op = $_GET['op'];
      } else {
        $op = "";
      }
      if ($op == 'delete') {
        $id_kategori = $_GET['id_kategori'];
        $sql1 = "DELETE FROM category WHERE id_kategori = '$id_kategori'";
        $result = mysqli_query($conn, $sql1);
        if ($result) {
          $sukses = "Berhasil hapus data";
        } else {
          $error = "Gagal melakukan delete data";
        }
      }

      if (isset($_POST['simpan'])) {
        $id_kategori = $_POST['id_kategori'];
        $nama_kat = $_POST['nama_kategori'];
        $keterangan = $_POST['keterangan'];

        if ($nama_kat && $keterangan) {
          if ($id_kategori) { // untuk update
            $sql1 = "UPDATE category SET nama_kategori = '$nama_kat', keterangan = '$keterangan' WHERE id_kategori = '$id_kategori'";
            $result = mysqli_query($conn, $sql1);
            if ($result) {
              $sukses = "Data berhasil diupdate";
            } else {
              $error = "Data gagal diupdate";
            }
          } else { // untuk insert
            $sql1 = "INSERT INTO category (nama_kategori, keterangan) VALUES ('$nama_kat', '$keterangan')";
            $result = mysqli_query($conn, $sql1);
            if ($result) {
              $sukses = "Berhasil memasukkan data baru";
            } else {
              $error = "Gagal memasukkan data";
            }
          }
        } else {
          $error = "Silakan masukkan semua data";
        }
      }

      if (isset($_POST['hapus'])) {
        $id_kategori = $_POST['id_kategori'];
        $sql1 = "DELETE FROM category WHERE id_kategori = '$id_kategori'";
        $result = mysqli_query($conn, $sql1);
        if ($result) {
          $sukses = "Berhasil hapus data";
        } else {
          $error = "Gagal melakukan delete data";
        }
      }
      ?>

      <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Data Kategori</h5>
              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#categoryModal" onclick="openModal()">
                Tambah Data
              </button>
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nama Kategori</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Keterangan</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Aksi</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Ambil data kategori dari database
                    $sql2 = "SELECT * FROM category ORDER BY id_kategori DESC";
                    $q2 = mysqli_query($conn, $sql2);
                    $nomor = 1;
                    while ($r2 = mysqli_fetch_array($q2)) {
                      $id_kategori = $r2['id_kategori'];
                      $nama_kat = $r2['nama_kategori'];
                      $keterangan = $r2['keterangan'];
                    ?>
                      <tr>
                        <td scope="row"><?php echo $nomor++ ?></td>
                        <td scope="row"><?php echo $nama_kat ?></td>
                        <td scope="row"><?php echo $keterangan ?></td>
                        <td scope="row">
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#categoryModal" onclick="editModal('<?php echo $id_kategori ?>', '<?php echo $nama_kat ?>', '<?php echo $keterangan ?>')">Edit</button>
                          <button name="hapus" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?php echo $id_kategori ?>">Hapus</button>
                        </td>
                      </tr>

                      <!-- Modal Hapus Kategori -->
                      <div class="modal fade" id="hapusModal<?php echo $id_kategori; ?>" tabindex="-1" aria-labelledby="hapusModalLabel<?php echo $id_kategori; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="hapusModalLabel<?php echo $id_kategori; ?>">Konfirmasi Hapus</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Apakah Anda yakin ingin menghapus Kategori dengan nama <?php echo "<b>" . $nama_kat . "</b>"; ?>?
                            </div>
                            <div class="modal-footer">
                              <form method="post" action="">
                                <input type="hidden" name="id_kategori" value="<?php echo $id_kategori; ?>">
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

        <!-- Modal Create / Edit -->
        <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Create / Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="categoryForm" action="" method="POST">
                  <input type="hidden" id="id_kategori" name="id_kategori">
                  <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                  </div>
                  <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
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
    </div>

    <script>
      function openModal() {
        document.getElementById('categoryForm').reset();
        document.getElementById('categoryModalLabel').textContent = 'Tambah Data';
        document.getElementById('id_kategori').value = '';
      }

      function editModal(id_kategori, nama_kat, keterangan) {
        document.getElementById('categoryForm').reset();
        document.getElementById('categoryModalLabel').textContent = 'Edit Data';
        document.getElementById('id_kategori').value = id_kategori;
        document.getElementById('nama_kategori').value = nama_kat;
        document.getElementById('keterangan').value = keterangan;
      }
    </script>


    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>