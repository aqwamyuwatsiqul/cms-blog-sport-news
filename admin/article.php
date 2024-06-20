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
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 300px;
        }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <aside class="left-sidebar">
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
            </div>
        </aside>

        <div class="body-wrapper">
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
            <?php
            include 'database.php';

            function tambahAdmin($id_artikel, $id_kategori, $id_users)
            {
                global $conn;

                $sql = "INSERT INTO admin (id_artikel, id_kategori, id_users) VALUES ('$id_artikel', '$id_kategori', '$id_users')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    return true;
                } else {
                    return false;
                }
            }

            function hapusAdmin($id_admin)
            {
                global $conn;

                $sql = "SELECT id_artikel FROM admin WHERE id_admin = '$id_admin'";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $id_artikel = $row['id_artikel'];

                    $sql_delete_admin = "DELETE FROM admin WHERE id_admin = '$id_admin'";
                    $result_delete_admin = mysqli_query($conn, $sql_delete_admin);

                    if ($result_delete_admin) {
                        $sql_delete_article = "DELETE FROM article WHERE id_artikel = '$id_artikel'";
                        $result_delete_article = mysqli_query($conn, $sql_delete_article);

                        if ($result_delete_article) {
                            return true;
                        } else {
                            return false;
                        }
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }


            if (isset($_POST['simpan'])) {
                $tanggal = $_POST['tanggal'];
                $judul = $_POST['judul'];
                $isi = $_POST['isi'];
                $kategori = $_POST['kategori'];

                if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
                    $gambar = "gambar/" . $_FILES['gambar']['name'];
                    move_uploaded_file($_FILES['gambar']['tmp_name'], $gambar);
                } else {
                    $gambar = "";
                }

                $sql = "INSERT INTO article (tanggal, judul, isi, gambar) VALUES ('$tanggal', '$judul', '$isi', '$gambar')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $id_artikel = mysqli_insert_id($conn);
                    $id_kategori = $_POST['kategori'];
                    $id_users = $_SESSION["user_id"];

                    if (tambahAdmin($id_artikel, $id_kategori, $id_users)) {
                        $sukses = "Berhasil memasukkan data baru";
                    } else {
                        $error = "Gagal memasukkan data ke tabel admin";
                    }
                } else {
                    $error = "Gagal memasukkan data ke tabel article";
                }
            }

            if (isset($_POST['hapus'])) {
                $id_admin = $_POST['id_admin'];

                if (hapusAdmin($id_admin)) {
                    echo "Artikel berhasil dihapus";
                } else {
                    echo "Gagal menghapus artikel";
                }
            }

            ?>

            <div class="container-fluid">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Data Artikel</h5>
                            <div class="col-lg-12 d-flex align-items-stretch mt-4 mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahArtikelModal">
                                    Tambah Artikel
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">No</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Tanggal</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Judul</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Penulis</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Kategori</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Gambar</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Aksi</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT admin.id_admin, article.id_artikel, article.tanggal, article.judul, article.isi, article.gambar, users.name, category.nama_kategori, admin.id_kategori
                                                FROM admin 
                                                JOIN article ON admin.id_artikel = article.id_artikel
                                                JOIN users ON admin.id_users = users.id_users
                                                JOIN category ON admin.id_kategori = category.id_kategori
                                                ORDER BY id_admin";
                                        $result = mysqli_query($conn, $sql);
                                        $nomor = 1;

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id_admin = $row['id_admin'];
                                                $id_artikel = $row['id_artikel'];
                                                $tanggal = $row['tanggal'];
                                                $judul = $row['judul'];
                                                $penulis = $row['name'];
                                                $nama_kategori = $row['nama_kategori'];
                                                $gambar = $row['gambar'];
                                                $isi = $row['isi'];
                                                $kategori = $row['id_kategori'];
                                        ?>
                                                <tr>
                                                    <td scope="row"><?php echo $nomor++; ?></td>
                                                    <td scope="row"><?php echo $tanggal; ?></td>
                                                    <td scope="row"><?php echo $judul; ?></td>
                                                    <td scope="row"><?php echo $penulis; ?></td>
                                                    <td scope="row"><?php echo $nama_kategori; ?></td>
                                                    <td scope="row"><?php echo $gambar; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $id_admin; ?>">Update</button>
                                                        <button name="hapus" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?php echo $id_admin ?>">Hapus</button>
                                                    </td>
                                                </tr>
                                                <!-- Modal Update data  -->
                                                <div class="modal fade" id="updateModal<?php echo $id_admin; ?>" tabindex="-1" aria-labelledby="updateModalLabel<?php echo $id_admin; ?>" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="updateModalLabel<?php echo $id_admin; ?>">Update Artikel</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>">
                                                                    <input type="hidden" name="id_artikel" value="<?php echo $row['id_artikel']; ?>">
                                                                    <div class="mb-4 row">
                                                                        <label for="update_tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="update_tanggal" name="update_tanggal" value="<?php echo $tanggal; ?>" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-4 row">
                                                                        <label for="update_judul" class="col-sm-2 col-form-label">Judul</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="update_judul" name="update_judul" value="<?php echo $judul; ?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-4 row">
                                                                        <label for="update_gambar" class="col-sm-2 col-form-label">Gambar</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="file" class="form-control" id="update_gambar" name="update_gambar">
                                                                            <input type="hidden" name="current_gambar" value="<?php echo $gambar; ?>">
                                                                            <img src="<?php echo $gambar; ?>" alt="Current Image" width="100">
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-4 row">
                                                                        <label for="update_kategori" class="col-sm-2 col-form-label">Kategori</label>
                                                                        <div class="col-sm-10">
                                                                            <select class="form-control" id="update_kategori" name="update_kategori">
                                                                                <option selected disabled>Open this select menu</option>
                                                                                <?php
                                                                                $sql_kategori = "SELECT id_kategori, nama_kategori FROM category";
                                                                                $result_kategori = mysqli_query($conn, $sql_kategori);
                                                                                if (mysqli_num_rows($result_kategori) > 0) {
                                                                                    while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
                                                                                        $selected = ($row_kategori['id_kategori'] == $kategori) ? 'selected' : '';
                                                                                ?>
                                                                                        <option value="<?php echo $row_kategori['id_kategori']; ?>" <?php echo $selected; ?>><?php echo $row_kategori['nama_kategori']; ?></option>
                                                                                <?php
                                                                                    }
                                                                                } else {
                                                                                    echo "0 result";
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row">
                                                                        <label for="isi" class="col-sm-2 col-form-label">Isi Artikel</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea class="form-control" id="update_isi" rows="5" name="isi"><?php echo $isi; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="mb-4 mt-3 d-flex justify-content-end gap-3">
                                                                            <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
                                                                            <button class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <!-- Modal Konfirmasi Hapus -->
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    mysqli_data_seek($result, 0);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id_admin = $row['id_admin'];
                                        $judul = $row['judul'];
                                ?>
                                        <div class="modal fade" id="hapusModal<?php echo $id_admin; ?>" tabindex="-1" aria-labelledby="hapusModalLabel<?php echo $id_admin; ?>" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="hapusModalLabel<?php echo $id_admin; ?>">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus artikel dengan judul <?php echo "<b>" . $judul . "</b>"; ?> ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="">
                                                            <input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>">
                                                            <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal Tambah Artikel-->
                <div class="modal fade" id="tambahArtikelModal" tabindex="-1" aria-labelledby="tambahArtikelModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahArtikelModalLabel">Tambah Artikel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-4 row">
                                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                            <?php
                                            date_default_timezone_set('Asia/Jakarta');
                                            $current_time = time();

                                            $hari = array(
                                                'Sunday' => 'Minggu',
                                                'Monday' => 'Senin',
                                                'Tuesday' => 'Selasa',
                                                'Wednesday' => 'Rabu',
                                                'Thursday' => 'Kamis',
                                                'Friday' => 'Jumat',
                                                'Saturday' => 'Sabtu'
                                            );

                                            $bulan = array(
                                                'January' => 'Januari',
                                                'February' => 'Februari',
                                                'March' => 'Maret',
                                                'April' => 'April',
                                                'May' => 'Mei',
                                                'June' => 'Juni',
                                                'July' => 'Juli',
                                                'August' => 'Agustus',
                                                'September' => 'September',
                                                'October' => 'Oktober',
                                                'November' => 'November',
                                                'December' => 'Desember'
                                            );

                                            $hari_ini = $hari[date('l', $current_time)];
                                            $tanggal = date('j', $current_time);
                                            $bulan_ini = $bulan[date('F', $current_time)];
                                            $tahun = date('Y', $current_time);
                                            $waktu = date('H.i', $current_time);

                                            $formatted_date = "$hari_ini, $tanggal $bulan_ini $tahun | $waktu";
                                            ?>
                                            <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php echo $formatted_date; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-4 row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="judul" name="judul" require>
                                        </div>
                                    </div>

                                    <div class="mb-4 row">
                                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="gambar" name="gambar">
                                        </div>
                                    </div>

                                    <div class="mb-4 row">
                                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="kategori" name="kategori" require>
                                                <option selected disabled>Open this select menu</option>
                                                <?php
                                                $sql = "SELECT id_kategori, nama_kategori FROM category";
                                                $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $id_kategori = $row['id_kategori'];
                                                        $nama_kategori = $row['nama_kategori'];
                                                ?>
                                                        <option value="<?php echo $id_kategori; ?>"><?php echo $nama_kategori; ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 result";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4 row">
                                        <label for="isi" class="col-sm-2 col-form-label">Isi Artikel</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="isi" name="isi"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-4 mt-3 d-flex justify-content-end gap-3">
                                            <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
                                            <button class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                </form>
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
            <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
            <script>
                ClassicEditor
                    .create(document.querySelector('#isi'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>

            <script>
                ClassicEditor
                    .create(document.querySelector('#update_isi'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        </div>
</body>

</html>