<!DOCTYPE html>
<html>

<head>
    <title>Tentang Sport News</title>
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
                <a href="#tentang" class="w3-bar-item w3-button">Tentang</a>
                <a href="#kontak" class="w3-bar-item w3-button">Kontak</a>
            </div>
        </div>
    </div>

    <div class="w3-content" style="max-width:1400px; margin-top:50px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-64 header-background">
            <h1><b>ABOUT US</b></h1>
            <p>Selamat Datang di <span class="w3-tag"> Sports News </span></p>
        </header>

        <!-- Grid -->
        <div class="w3-row">
            <!-- Main Content -->
            <div class="w3-col l12 s12">
                <!-- About Content -->
                <div class="w3-card-4 w3-margin w3-white">
                    <div class="w3-container" style="text-align: center;">
                        <h3><b>Tentang Kami</b></h3>
                    </div>
                    <div class="w3-container" style="text-align: justify;">
                        <p>Selamat datang di <b>Sport News</b>, sumber utama Anda untuk berita terkini dan terpercaya seputar dunia olahraga. Kami berkomitmen untuk memberikan liputan komprehensif dari berbagai cabang olahraga, baik di tingkat nasional maupun internasional. Dari sepak bola hingga olahraga ekstrem, kami hadir untuk memastikan Anda tidak ketinggalan momen penting.</p>

                        <p>Di <b>Sport News</b>, kami menyadari pentingnya informasi yang akurat dan mendalam. Oleh karena itu, kami bekerja sama dengan para ahli dan pengamat olahraga terkemuka untuk menyajikan analisis mendalam, wawancara eksklusif, dan cerita inspiratif dari para atlet. Kami juga menyediakan update skor langsung dan statistik pertandingan secara real-time, sehingga Anda dapat mengikuti perkembangan terkini kapan saja dan di mana saja.</p>

                        <p>Kami bangga menjadi bagian dari komunitas olahraga yang penuh semangat dan antusiasme. Mari bergabung bersama kami, bagikan pendapat Anda, dan ikut dalam diskusi untuk merayakan kegembiraan dan kecintaan terhadap olahraga.</p>

                        <p>Terima kasih telah memilih <b>Sport News</b> sebagai sumber informasi olahraga Anda. Nikmati setiap momen dan tetap update dengan berita-berita terbaru dari dunia olahraga bersama kami!</p>
                    </div>
                </div>
            </div>
            <!-- END Main Content -->
        </div>


        <br>

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top" style="text-align: center;">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
        <p>&copy; 2024 Sport News. All rights reserved.</p>
    </footer>
</body>

</html>