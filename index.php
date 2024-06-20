<!DOCTYPE html>
<html>

<head>
    <title>Sport News</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="admin/gambar/logo.png" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }

        .article-container {
            display: flex;
            align-items: stretch;
            margin-bottom: 16px;
            /* Add margin between articles */
        }

        .article-image {
            flex: 0 0 40%;
        }

        .article-content {
            flex: 1;
            padding: 16px;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-background {
            background-image: url('admin/gambar/bg-image.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 32px 0;
        }
    </style>
</head>

<body class="w3-light-grey">
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="http://localhost/project/cmsBlog/web/" class="w3-bar-item w3-button">Sports News</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="http://localhost/project/cmsBlog/web/" class="w3-bar-item w3-button">Beranda</a>
                <a href="about.php" class="w3-bar-item w3-button">Tentang</a>
                <a href="#kontak" class="w3-bar-item w3-button">Kontak</a>
            </div>
        </div>
    </div>

    <div class="w3-content" style="max-width:1400px; margin-top:50px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-64 header-background">
            <h1><b>Selamat Datang Di Sport News</b></h1>
            <p>Sumber utama anda untuk berita terkini dan terpercaya seputar <span class="w3-tag">dunia olahraga </span></p>
        </header>

        <!-- Grid -->
        <div class="w3-row">
            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <?php
                include "admin/database.php";
                function potong_isi($isi_artikel, $jml_karakter)
                {
                    while ($isi_artikel[$jml_karakter] != " ") {
                        --$jml_karakter;
                    }
                    $potongan = substr($isi_artikel, 0, $jml_karakter);
                    $isi_artikel_terpotong = $potongan . " .... ";
                    return $isi_artikel_terpotong;
                }

                $sql = "SELECT admin.id_admin, admin.id_kategori, article.id_artikel, article.tanggal, article.judul, article.isi, article.gambar, users.name, category.nama_kategori, admin.id_kategori
                        FROM admin 
                        JOIN article ON admin.id_artikel = article.id_artikel
                        JOIN users ON admin.id_users = users.id_users
                        JOIN category ON admin.id_kategori = category.id_kategori
                        ORDER BY id_admin LIMIT 1";
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
                        $id_kategori = $row['id_kategori'];
                        $gambar = $row['gambar'];
                        $isi = $row['isi'];
                        $kategori = $row['id_kategori'];
                        $potong_isi = potong_isi($isi, 250);
                ?>
                        <!-- Blog entry -->
                        <div class="w3-card-4 w3-margin w3-white">
                            <img src="admin/<?php echo $gambar; ?>" alt="Nature" style="width:100%">
                            <div class="w3-container">
                                <h3><b><?php echo $judul ?></b></h3>
                                <span class="w3-opacity"><?php echo $tanggal ?></span>
                            </div>

                            <div class="w3-container" style="text-align: justify;">
                                <p><?php echo $potong_isi; ?></p>
                                <div class="w3-row">
                                    <div class="w3-col m8 s12">
                                        <p><a class="w3-button w3-padding-large w3-white w3-border" href="detail.php?id_admin=<?php echo $id_admin; ?>&id_kategori=<?php echo $id_kategori ?>"><b>Selengkapnya >></b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                <?php
                    }
                } else {
                    echo "<p>Tidak ada data</p>";
                }
                ?>

                <!-- Blog entries with layout adjustment -->
                <?php
                $sql_post = "SELECT admin.id_admin, admin.id_kategori, article.id_artikel, article.tanggal, article.judul, article.isi, article.gambar, users.name, category.nama_kategori, admin.id_kategori
                            FROM admin 
                            JOIN article ON admin.id_artikel = article.id_artikel
                            JOIN users ON admin.id_users = users.id_users
                            JOIN category ON admin.id_kategori = category.id_kategori
                            WHERE admin.id_admin < (SELECT MAX(admin.id_admin) FROM admin)
                            ORDER BY admin.id_admin DESC LIMIT 5";
                $result_post = mysqli_query($conn, $sql_post);

                if (mysqli_num_rows($result_post) > 0) {
                    while ($row = mysqli_fetch_assoc($result_post)) {
                        $id_admin = $row['id_admin'];
                        $id_artikel = $row['id_artikel'];
                        $tanggal = $row['tanggal'];
                        $judul = $row['judul'];
                        $penulis = $row['name'];
                        $nama_kategori = $row['nama_kategori'];
                        $id_kategori = $row['id_kategori'];
                        $gambar = $row['gambar'];
                        $isi = $row['isi'];
                        $kategori = $row['id_kategori'];
                        $potong_isi = potong_isi($isi, 250);
                ?>
                        <div class="w3-card-4 w3-margin w3-white article-container">
                            <div class="article-image">
                                <img src="admin/<?php echo $gambar; ?>" alt="Nature">
                            </div>
                            <div class="article-content">
                                <h3><b><?php echo $judul ?></b></h3>
                                <span class="w3-opacity"><?php echo $tanggal ?></span>
                                <div style="text-align: justify;">
                                    <p><?php echo $potong_isi; ?></p>
                                </div>
                                <div class="w3-row">
                                    <div class="w3-col m8 s12">
                                        <a class="w3-button w3-padding-large w3-white w3-border" href="detail.php?id_admin=<?php echo $id_admin; ?>&id_kategori=<?php echo $id_kategori; ?>"><b>Selengkapnya >></b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p>Tidak ada data</p>";
                }
                ?>
                <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Kategori</h4>
                    </div>
                    <div class="list-group">
                        <?php
                        $sql = "SELECT id_kategori, nama_kategori, keterangan FROM category";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $kategori = $row['id_kategori'];
                                $nama_kategori = $row['nama_kategori'];
                                $keterangan = $row['keterangan'];
                        ?>
                                <ul class="w3-ul w3-hoverable w3-white">
                                    <li class="w3-padding-16">
                                        <a href="kategori.php?id_kategori=<?php echo $kategori; ?>" style="text-decoration: none; color: inherit;">
                                            <span class="w3-large"><?php echo $nama_kategori; ?></span><br>
                                            <span><?php echo $keterangan; ?></span>
                                        </a>
                                    </li>
                                </ul>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <hr>
                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="admin/gambar/about.jpg" style="width:100%">
                    <div class="w3-container w3-white">
                        <h4><b>Tentang Kami</b></h4>
                        <p>Selamat datang di Sport News, sumber utama Anda untuk berita terkini dan terpercaya seputar dunia olahraga. Kami berkomitmen untuk memberikan liputan komprehensif dari berbagai cabang olahraga, baik di tingkat nasional maupun internasional. Dari sepak bola hingga olahraga ekstrem, kami hadir untuk memastikan Anda tidak ketinggalan momen penting.</p>
                    </div>
                </div>
                <hr>

                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <?php
                    $sql_tentang = "SELECT id_kategori, nama_kategori, keterangan FROM category";
                    $result_tentang = mysqli_query($conn, $sql_tentang);

                    if (mysqli_num_rows($result_tentang) > 0) {
                    ?>
                        <div class="w3-container w3-white w3-flex-container">
                            <?php
                            while ($row = mysqli_fetch_assoc($result_tentang)) {
                                $kategori = $row['id_kategori'];
                                $nama_kategori = $row['nama_kategori'];
                            ?>
                                <a href="kategori.php?id_kategori=<?php echo $kategori; ?>" style="text-decoration: none; color: inherit;">
                                    <span class="w3-tag w3-black w3-margin-bottom w3-flex-item"><?php echo $nama_kategori ?></span>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <style>
                    .w3-flex-container {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 3px;
                        /* Space between tags */
                    }

                    .w3-flex-item {
                        margin: 10px 0;
                        /* Add space at the top and bottom */
                    }
                </style>




                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top" style="text-align: center;">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        <p>&copy; 2024 Sport News. All rights reserved.</p>
    </footer>


</body>

</html>