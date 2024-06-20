-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 02:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_users`, `id_artikel`, `id_kategori`) VALUES
(78, 5, 86, 10),
(79, 5, 87, 10),
(82, 6, 90, 12),
(83, 7, 91, 11),
(84, 7, 92, 11),
(86, 6, 94, 12),
(87, 6, 95, 13),
(90, 6, 98, 15),
(91, 7, 99, 14),
(92, 7, 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_artikel` int(12) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_artikel`, `tanggal`, `judul`, `isi`, `gambar`) VALUES
(86, 'Minggu, 9 Juni 2024 | 06.47', 'Tim Nasional Sepak Bola Indonesia Raih Kemenangan Gemilang di Piala Asia', '<p>Tim nasional sepak bola Indonesia mencatat sejarah baru dengan meraih kemenangan gemilang dalam pertandingan grup Piala Asia 2024. Bertanding di Stadion Utama Gelora Bung Karno, Jakarta, Garuda Muda berhasil mengalahkan tim kuat Jepang dengan skor 2-1.</p><p><strong>Pertandingan yang Mendebarkan</strong></p><p>Pertandingan yang berlangsung pada malam tadi menyajikan drama dan ketegangan sejak menit pertama. Tim Jepang, yang dikenal dengan permainan cepat dan terorganisir, memulai pertandingan dengan dominasi penguasaan bola. Namun, Indonesia mampu memberikan perlawanan sengit melalui strategi bertahan yang solid dan serangan balik cepat.</p><p>Gol pertama dicetak oleh pemain muda berbakat, Andi Firman, pada menit ke-25. Berawal dari serangan balik cepat, Andi yang menerima umpan matang dari gelandang serang, Rizki Hidayat, berhasil melepaskan tendangan keras dari luar kotak penalti yang tak mampu dihalau oleh kiper Jepang.</p><p><strong>Respons Jepang dan Drama Babak Kedua</strong></p><p>Memasuki babak kedua, Jepang meningkatkan intensitas serangan mereka. Usaha mereka membuahkan hasil pada menit ke-60 ketika pemain depan mereka, Takumi Minamino, berhasil menyamakan kedudukan melalui sundulan tajam hasil umpan silang dari sayap kanan.</p><p>Namun, Indonesia tidak tinggal diam. Di tengah tekanan, pelatih Indonesia, Budi Santoso, melakukan perubahan strategi dengan memasukkan pemain berpengalaman, Bambang Pamungkas, yang baru pulih dari cedera. Keputusan ini terbukti jitu. Pada menit ke-78, melalui skema tendangan sudut, Bambang berhasil mencetak gol penentu kemenangan dengan sundulan yang akurat.</p><p><strong>Euforia di Stadion dan Harapan Baru</strong></p><p>Suara sorak sorai ribuan pendukung Indonesia memenuhi stadion saat peluit akhir berbunyi. Kemenangan ini tidak hanya berarti tiga poin penting bagi Indonesia di babak grup, tetapi juga meningkatkan moral dan semangat tim serta para penggemar di seluruh negeri.</p><p>Pelatih Budi Santoso dalam konferensi pers setelah pertandingan menyatakan rasa bangganya terhadap penampilan para pemain. \"Mereka menunjukkan semangat juang yang luar biasa. Kemenangan ini adalah hasil kerja keras seluruh tim, dan kami dedikasikan untuk seluruh masyarakat Indonesia,\" ujar Budi.</p><p><strong>Langkah Selanjutnya</strong></p><p>Dengan kemenangan ini, Indonesia memiliki peluang besar untuk melaju ke babak selanjutnya. Pertandingan berikutnya melawan tim Korea Selatan akan menjadi ujian berat berikutnya bagi Garuda Muda. Namun, dengan semangat dan performa yang ditunjukkan, optimisme tinggi mengiringi langkah tim nasional.</p><p>Para penggemar diharapkan terus memberikan dukungan penuh agar Indonesia dapat terus berprestasi di ajang internasional ini. Tim nasional kini bersiap untuk pertandingan berikutnya dengan harapan besar membawa harum nama bangsa di kancah sepak bola Asia.</p>', 'gambar/sepakbola.jpeg'),
(87, 'Minggu, 9 Juni 2024 | 06.52', 'Para Rival Man City Siap Banget Antar Guardiola Pergi', '<p>Pep Guardiola diprediksi meninggalkan Manchester City tahun depan. Kabar ini diyakini bikin para rival Citizens antusias. Guardiola memasuki tahun kesembilannya bersama Man City. Datang pada Juli 2016, ia sudah mengantarkan klub tersebut memenangi semua gelar yang bisa dimenangi.<br><br>Dengan kontrak tersisa hanya setahun lagi, rumor kepergiannya mencuat. Ia diyakini siap untuk mencari tantangan baru lagi setelah membawa Man City mendominasi Inggris.<br><br>Usai mengantarkan Man City juara Liga Inggris untuk kali keempat beruntun, pria Catalunya itu mengakui lebih dekat dengan kepergian daripada kemungkinan bertahan. Eks pemain dan manajer City Stuart Pearce meyakini musim depan adalah yang terakhir buat Guardiola.<br><br>\"Saya akan lebih kaget kalau Pep Guardiola bertahan lima tahun lagi ketimbang kalau dia memutuskan bahwa musim depan adalah yang terakhir. Dia bisa dibilang manajer terbaik yang pernah disaksikan Premier League dan saya salah satu yang akan kecewa kalau dia pergi,\" ungkapnya dilansir Manchester Evening News.<br><br>\"Sebab saya pernah di City dalam kesempatan yang aneh, dia menunjukkan saya level sepakbola yang belum pernah saya lihat sebelumnya.\"<br><br>\"Dia benar-benar luar biasa sejauh ini, tapi saya rasa para rivalnya akan benar-benar bahagia. Mereka akan membawanya ke bandara untuk menyingkirkannya dari Manchester City, dengan harapan mereka akan sedikit menurun,\" tambahnya.<br><br>&nbsp;</p>', 'gambar/pep-guardiola-manchester-city_169.jpeg'),
(90, 'Minggu, 9 Juni 2024 | 06.59', 'Kalah di Semifinal, Sabar/Reza Akui Habis Bensin', '<p>Tren positif Sabar Karyaman Gutama/Moh. Reza Pahlevi Isfahani terhenti di babak empat besar Indonesia Open 2024. Mereka kehabisan bensin. Tampil di babak semifinal Indonesia Open, Sabtu (8/6), Sabar/Reza harus mengakui keunggulan Man Wei Chong/Kai Wun Tee. Mereka kalah setelah bertarung ketat melawan wakil Malaysia tersebut 27-29, 13-21.<br><br>Sabar/Reza seusai tanding tetap mengucap syukur dengan pencapaian yang sudah mereka raih hingga saat ini. Terlebih, mereka juga sudah tampil semaksimal mungkin, meski tak bisa dipungkiri fisik tak mendukung di akhir-akhir.<br><br>\"Kesulitan saya pribadi karena kondisi badan sudah sedikit menurun, jadi mungkin serangan kita sedikit menurun, dan pertahanan dari Malaysia sangat kuat. Jadi itu sih,\" kata Reza saat ditemui di Mixed zone.<br><br>\"Kalau boleh menambahkan di poin-poin terakhir kita kurang teliti, terburu-buru, dan terbawa suasana juga, jadinya kurang bisa ambil di game awal,\" Sabar menimpali.<br><br>Reza juga menepis jika kekalahan mereka karena tekanan menjadi satu-satunya wakil Indonesia di turnamen BWF Super 1000.<br><br>\"Sebenarnya bukan tekanan, malah jadi motivasi kami untuk bermain dengan baik, cuma tak bisa dipungkiri tenaga kami sudah banyak terkuras. Kami juga sudah main di empat pertandingan, mungkin ini pertandingan di empat turnamen terakhir dan cukup panjang perjalanannya, jadi itu tenaganya sangat terkuras,\" Reza menjelaskan.<br><br>Meskipun terhenti di semifinal, Sabar/Reza tetap berterima kasih kepada para suporter yang telah mendukung mereka hingga larut malam.<br><br>\"Alhamdullilah kami berdua bisa menyelesaikan pertandingan dengan baik tanpa cedera apapun. Kami bangga bisa menyelesaikan pertandingan dengan semaksimal mungkin,\" kata Sabar<br><br>\"Walaupun hasilnya belum bisa sampai ke puncak, belum bisa memenangkan pertandingan, tapi saya sangat berterima kasih dengan fans yang sudah datang ke Istora, fans di rumah, semoga di next turnamen kita bisa jauh lebih baik.\"<br><br>Selanjutnya, Sabar/Reza berencana untuk tampil di Japan Open pada Agustus mendatang. Mereka akan melakukan pembenahan agar di turnamen selanjutnya bisa meraih hasil lebih maksimal.<br><br>\"Target kami pribadi ingin tembus 20 besar dunia dan semoga pencapaiannya bisa lebih dengan performa kali ini dan meningkatkan kepercayaan diri dan bisa berjuang untuk Indonesia,\" ucap Sabar.</p>', 'gambar/moh-reza-pahlevi-isfahani-sabar-karyaman-gutama_169.jpeg'),
(91, 'Minggu, 9 Juni 2024 | 07.04', 'Lolos ke Putaran Final BCL Asia, Pelita Jaya Asah Fisik dan Mental', '<p>Pelita Jaya melangkah ke putaran final Basketball Champions League (BCL) Asia 2024. Pelita Jaya akan bersaing dengan tujuh perwakilan negara Asia.</p><p>Pelita Jaya lolos usai melewati kualifikasi sebanyak dua putaran. Pelita Jaya lolos dengan banyak perjuangan karena juga masih harus membagi konsentrasi dengan IBL.</p><p>Kualifikasi putaran pertama digelar di Ulaanbataar, Mongolia, pada 3-7 April. Pelita Jaya yang tergabung di Grup B menyapu bersih tiga kemenangan dan memuncaki klasemen.</p><p>Mereka mengalahkan juara Mongolia, Ulaanbataar Xac Broncos, dengan skor 89-83 dan kemudian menaklukkan wakil Singapura, Adroit Club, dengan skor 82-64. Pada pertandingan terakhir, Pelita Jaya menaklukkan klub Thailand, Hi-Tech Basketball Club, dengan skor 99-81.</p><p>Pelita Jaya kembali mencatat hasil sempurna di kualifikasi putaran kedua yang digelar di Jakarta pada 23-26 April. Tiga kemenangan dalam tiga pertandingan dicatatkan oleh Andakara Prastawa dkk.</p><p>Pelita Jaya pun lolos ke putaran final BCL Asia 2024 sebagai juara putaran dua kualifikasi. Mereka didampingi NC Matrix Deers (Malaysia) yang finis sebagai runner-up.</p><p>Putaran final BCL Asia 2024 diikuti oleh delapan klub. Selain dua klub yang lolos dari kualifikasi, enam klub lainnya adalah Busan KCC Egis (Korea Selatan), Liaoning Flying Leopards (China), Hiroshima Dragonflies (Jepang), Shabab Al Ahli (Uni Emirat Arab), Al Riyady Beirut (Libanon), dan Shahrdari Gorgan (Iran).</p><p>Shooting guard Pelita Jaya Muhammad Arighi membeberkan persiapan timnya jelang tampil di BCL Asia 2024.</p><p>\"Dari aku prepare secara mental dan fisik, jadi lebih siap karena sudah masuk level Asia top eight. Kita bermain seperti Pelita Jaya dan memaksimalkan yang ada. Terima kasih untuk PJ Holic dan pecinta basket Indonesia udah dukung Pelita Jaya sampai di BCL Asia, mohon doanya agar kita bisa kasih yang terbaik,\" ujar Arighi.</p><p>Sementara itu, kapten Pelita Jaya Andakara Prastawa berharap timnya mampu bersaing meski tidak diunggulkan di BCL Asia 2024.</p><p>\"Walaupun di sini kita tidak diunggulkan, tapi kita akan berusaha bermain sebaik mungkin dan kembali ke Jakarta dengan sehat dan selamat,\" ungkap Prastawa.</p><p>Putaran final Basketball Champions League Asia 2024 akan digelar di Dubai, Uni Emirat Arab, pada 9-15 Juni 2024.</p>', 'gambar/pelita-jaya_169.jpeg'),
(92, 'Minggu, 9 Juni 2024 | 07.16', 'Tim Basket Indonesia Cetak Sejarah di Kejuaraan Asia 2024', '<p>Tim nasional basket Indonesia mencatat sejarah baru dengan lolos ke semifinal Kejuaraan Basket Asia 2024 setelah mengalahkan tim kuat Filipina dalam pertandingan yang menegangkan di Jakarta. Kemenangan ini membawa Indonesia ke babak empat besar untuk pertama kalinya dalam sejarah kejuaraan tersebut.</p><p><strong>Pertandingan yang Mendebarkan</strong></p><p>Bertanding di Istora Senayan, Jakarta, tim Indonesia menunjukkan permainan yang solid sejak awal pertandingan. Didukung ribuan pendukung setia, Indonesia berhasil mengalahkan Filipina dengan skor tipis 88-85. Pertandingan berlangsung ketat dengan kedua tim saling kejar-mengejar poin hingga detik terakhir.</p><p>Pemain bintang Indonesia, Arki Dikania Wisnu, menjadi pahlawan dengan mencetak 25 poin, termasuk tiga lemparan tiga angka yang krusial di kuarter keempat. Kecepatan dan ketepatan Arki dalam menyerang serta pertahanan ketat yang diperagakan oleh tim Indonesia berhasil membendung serangan-serangan Filipina yang dikenal agresif.</p><p><strong>Strategi dan Kerja Sama Tim</strong></p><p>Pelatih tim nasional Indonesia, Rajko Toroman, memuji kerja keras dan disiplin anak asuhnya. \"Kami bermain dengan hati dan strategi yang matang. Para pemain menunjukkan semangat juang yang luar biasa dan saling mendukung satu sama lain di setiap menit pertandingan. Ini adalah kemenangan untuk seluruh bangsa Indonesia,\" ujar Toroman dalam konferensi pers setelah pertandingan.</p><p>Selain Arki, pemain lain seperti Brandon Jawato dan Lester Prosper juga memberikan kontribusi signifikan dengan masing-masing mencetak 15 dan 14 poin. Kerja sama tim yang solid dan komunikasi yang baik di lapangan menjadi kunci sukses Indonesia dalam menghadapi tekanan dari lawan.</p><p><strong>Dukungan Penuh dari Penggemar</strong></p><p>Kemenangan ini disambut dengan euforia oleh para penggemar basket di Indonesia. Ribuan pendukung yang memenuhi stadion serta jutaan yang menyaksikan melalui layar kaca memberikan apresiasi dan dukungan penuh kepada tim nasional. Atmosfer di dalam stadion begitu meriah dengan sorak sorai dan nyanyian yang tak henti-hentinya mengalir untuk mendukung tim kesayangan mereka.</p><p>Seorang penggemar, Andi Setiawan, menyatakan, \"Ini adalah momen yang sangat membanggakan. Tim kita telah bekerja keras dan menunjukkan bahwa kita bisa bersaing dengan tim-tim kuat lainnya di Asia. Kami berharap mereka bisa terus melangkah hingga final.\"</p><p><strong>Langkah Selanjutnya</strong></p><p>Dengan kemenangan ini, Indonesia akan menghadapi Korea Selatan di babak semifinal. Pertandingan ini diperkirakan akan menjadi ujian berat berikutnya bagi tim nasional. Namun, dengan semangat dan performa yang telah ditunjukkan, harapan besar mengiringi langkah tim Indonesia.</p><p>Persiapan intensif akan terus dilakukan menjelang pertandingan semifinal. Pelatih Rajko Toroman menekankan pentingnya fokus dan konsistensi dalam permainan. \"Kami harus tetap rendah hati dan terus bekerja keras. Setiap pertandingan adalah tantangan baru, dan kami harus siap menghadapi segala kemungkinan,\" tambahnya.</p><p><strong>Masa Depan Cerah untuk Basket Indonesia</strong></p><p>Kemenangan ini tidak hanya menjadi pencapaian penting bagi tim nasional, tetapi juga memberikan harapan baru bagi perkembangan olahraga basket di Indonesia. Prestasi ini diharapkan dapat menginspirasi generasi muda untuk lebih giat berlatih dan mengembangkan bakat mereka di bidang basket.</p><p>Dengan dukungan penuh dari pemerintah, sponsor, dan masyarakat, masa depan basket Indonesia tampak cerah. Tim nasional bertekad untuk terus berjuang dan membawa pulang gelar juara, mengharumkan nama Indonesia di kancah internasional.</p>', 'gambar/hasil-pra-kualifikasi-olimpiade-paris-2024-timnas-basket-indonesia-ditaklukkan-india-74-90-WKsy81JUTn.jpg'),
(94, 'Minggu, 9 Juni 2024 | 07.33', 'Indonesia Dominasi Kejuaraan Dunia Bulu Tangkis 2024', '<p>Indonesia kembali menunjukkan dominasinya di dunia bulu tangkis dengan meraih tiga gelar juara dalam Kejuaraan Dunia Bulu Tangkis 2024 yang berlangsung di Kuala Lumpur, Malaysia. Atlet-atlet Indonesia berhasil mencatat prestasi gemilang di berbagai kategori, mengukuhkan posisi Indonesia sebagai salah satu kekuatan utama dalam bulu tangkis dunia.</p><p><strong>Pertandingan Final yang Sengit</strong></p><p>Pada babak final, sektor tunggal putra menjadi sorotan utama ketika Jonatan Christie berhasil mengalahkan Viktor Axelsen dari Denmark dalam pertandingan tiga set yang berlangsung ketat. Jonatan, yang sempat tertinggal di set pertama, menunjukkan mental juara dengan bangkit dan memenangkan dua set berikutnya dengan skor 18-21, 21-16, dan 21-19. Kemenangan ini sekaligus menjadi gelar juara dunia pertama bagi Jonatan Christie.</p><p>Sektor ganda putri juga tak kalah menarik. Pasangan Greysia Polii dan Apriyani Rahayu mengulang kesuksesan mereka dengan menundukkan pasangan Jepang, Yuki Fukushima dan Sayaka Hirota, dalam dua set langsung, 21-17 dan 21-15. Performa solid dan kekompakan pasangan Indonesia ini menjadi kunci kemenangan mereka di final.</p><p>Di sektor ganda campuran, pasangan Praveen Jordan dan Melati Daeva Oktavianti tampil memukau dengan mengalahkan pasangan China, Zheng Siwei dan Huang Yaqiong. Pertandingan berlangsung dramatis dengan skor akhir 21-14, 16-21, dan 21-18, menandai kemenangan gemilang bagi Praveen dan Melati.</p><p><strong>Reaksi dan Harapan</strong></p><p>Pelatih kepala tim bulu tangkis Indonesia, Herry Iman Pierngadi, menyampaikan rasa bangganya atas pencapaian anak asuhnya. \"Ini adalah hasil dari kerja keras dan dedikasi seluruh tim. Kami bangga bisa membawa pulang tiga gelar juara dunia dan ini menjadi motivasi bagi kami untuk terus berprestasi di masa mendatang,\" kata Herry dalam konferensi pers.</p><p>Jonatan Christie juga menyampaikan rasa syukurnya atas kemenangan ini. \"Ini adalah mimpi yang menjadi kenyataan. Saya berterima kasih kepada semua yang telah mendukung saya, terutama pelatih dan keluarga saya. Semoga prestasi ini bisa menjadi inspirasi bagi atlet-atlet muda Indonesia,\" ujarnya dengan penuh semangat.</p><p><strong>Dukungan Penuh dari Penggemar</strong></p><p>Kemenangan ini disambut dengan euforia oleh para penggemar bulu tangkis di Indonesia. Ribuan pendukung yang menyaksikan langsung di stadion maupun melalui layar kaca memberikan apresiasi tinggi kepada para atlet yang telah berjuang mengharumkan nama bangsa.</p><p>Salah satu penggemar, Budi Santoso, mengatakan, \"Kita sangat bangga dengan prestasi para atlet kita. Mereka menunjukkan bahwa dengan kerja keras dan semangat, kita bisa bersaing dan menang di level tertinggi.\"</p><p><strong>Persiapan Menuju Olimpiade</strong></p><p>Dengan kemenangan ini, tim bulu tangkis Indonesia semakin percaya diri menghadapi Olimpiade 2024 yang akan berlangsung di Paris. Persiapan intensif dan latihan keras akan terus dilakukan untuk mempertahankan dan meningkatkan performa di ajang olahraga terbesar dunia tersebut.</p><p>Kemenangan di Kejuaraan Dunia ini tidak hanya menjadi pencapaian prestisius, tetapi juga menjadi modal berharga bagi tim Indonesia untuk terus berjuang dan meraih kesuksesan di masa depan. Para atlet dan pelatih bertekad untuk terus memberikan yang terbaik bagi bangsa dan negara.</p>', 'gambar/apriyani-rahayu-siti-fadia-silva-ramadhanti.jpeg'),
(95, 'Minggu, 9 Juni 2024 | 07.34', 'Pembalap Indonesia Ciptakan Sejarah di MotoGP 2024', '<p>Pembalap Indonesia, Dimas Ekky Pratama, mencatat sejarah baru dengan meraih podium pertama dalam karirnya di MotoGP. Bertanding di sirkuit Mugello, Italia, Dimas menunjukkan performa luar biasa dan berhasil finis di posisi ketiga, membawa kebanggaan bagi Indonesia di ajang balap motor paling prestisius di dunia.</p><p><strong>Perjalanan Menuju Podium</strong></p><p>Dimas Ekky Pratama, yang memulai balapan dari posisi ketujuh, menunjukkan keterampilan dan strategi yang matang sepanjang balapan. Dalam kondisi lintasan yang menantang, Dimas mampu menjaga konsistensi dan fokus, mengatasi tekanan dari pembalap-pembalap papan atas lainnya.</p><p>Balapan berlangsung sengit dengan banyaknya aksi saling salip di antara para pembalap. Dimas menunjukkan keberanian dan kecerdikan dalam memilih momen yang tepat untuk menyalip lawan-lawannya. Di lap-lap akhir, Dimas berhasil memanfaatkan peluang dengan baik, naik ke posisi ketiga dan mempertahankannya hingga garis finis.</p><p><strong>Reaksi dan Pujian</strong></p><p>Setelah melewati garis finis, Dimas tidak bisa menyembunyikan kebahagiaannya. \"Ini adalah mimpi yang menjadi kenyataan. Saya berterima kasih kepada tim, keluarga, dan semua penggemar yang selalu mendukung saya. Kami bekerja sangat keras untuk mencapai titik ini, dan saya bangga bisa membawa bendera Indonesia ke podium,\" ujar Dimas dengan emosional.</p><p>Manajer tim, Alberto Puig, memuji penampilan Dimas yang dianggapnya sebagai hasil dari kerja keras dan dedikasi. \"Dimas telah menunjukkan potensi besar sejak awal musim, dan hari ini dia membuktikan bahwa dia bisa bersaing dengan yang terbaik. Kami bangga memiliki Dimas di tim kami dan berharap ini akan menjadi awal dari banyak prestasi lainnya,\" kata Puig.</p><p><strong>Dukungan dari Indonesia</strong></p><p>Kemenangan ini disambut dengan antusiasme tinggi oleh para penggemar balap di Indonesia. Banyak yang menyaksikan balapan secara langsung melalui siaran televisi maupun streaming, memberikan dukungan penuh kepada Dimas. Media sosial dipenuhi dengan ucapan selamat dan kebanggaan atas pencapaian ini.</p><p>Menteri Pemuda dan Olahraga Indonesia, Zainudin Amali, menyatakan, \"Prestasi Dimas Ekky Pratama adalah kebanggaan bagi kita semua. Ini membuktikan bahwa pembalap Indonesia memiliki kualitas untuk bersaing di tingkat dunia. Kami akan terus mendukung pengembangan olahraga balap di Indonesia.\"</p><p><strong>Langkah Selanjutnya</strong></p><p>Dengan hasil ini, Dimas Ekky Pratama semakin percaya diri menghadapi seri-seri berikutnya di MotoGP 2024. Pencapaian podium ini tidak hanya meningkatkan posisi Dimas di klasemen sementara, tetapi juga membuka peluang lebih besar untuk mendapatkan dukungan sponsor dan pengembangan karirnya di masa depan.</p><p>Dimas dan timnya akan terus bekerja keras mempersiapkan diri untuk balapan berikutnya di Sirkuit Catalunya, Spanyol. Dengan semangat dan motivasi yang tinggi, mereka berharap dapat melanjutkan tren positif dan meraih lebih banyak prestasi di ajang MotoGP.</p><p><strong>Inspirasi Bagi Generasi Muda</strong></p><p>Prestasi Dimas Ekky Pratama menjadi inspirasi bagi generasi muda di Indonesia. Banyak yang berharap pencapaian ini akan mendorong lebih banyak anak muda untuk terjun ke dunia balap motor dan mengembangkan bakat mereka. Dimas juga berharap bisa menjadi panutan dan motivasi bagi pembalap-pembalap muda di tanah air.</p><p>Dengan dedikasi, kerja keras, dan dukungan dari berbagai pihak, masa depan balap motor Indonesia tampak cerah. Dimas Ekky Pratama telah membuka jalan, dan kita semua menantikan lebih banyak prestasi dari pembalap-pembalap Indonesia di kancah internasional.</p>', 'gambar/library_upload_21_2023_10_996x664_veda-ega_8c5cb48.jpg'),
(98, 'Minggu, 9 Juni 2024 | 07.46', 'Timnas Voli Putra Indonesia Finish di Peringkat 11 AVC Challenge Cup 2024 Usai Bekuk Taiwan', '<p>Timnas voli putra Indonesia&nbsp;berhasil mengalahkan Taiwan di ajang&nbsp;<strong>AVC Challenge Cup 2024</strong>&nbsp;pada hari Jumat (07/06/2024).</p><p>Laga Indonesia vs Taiwan ini digelar di Isa Bin Rashid Hall in Isa Town, Bahrain. Yohanes Dedi dan kawan-kawan menang straight set 3-0.</p><p>Di set pertama mereka cukup kesulitan menghadapi Taiwan sebelum akhirnya menang dengan skor 26-24.</p><p>Set kedua juga berlangsung cukup ketat tapi Indonesia bisa menang 25-21. Set ketiga berjalan lebih alot akan tetapi pada akhirnya mereka bisa mengalahkan Taiwan 27-25.</p><p>Dengan kemenangan tersebut, Indonesia pun menduduki peringkat ke-11 AVC Challenge Cup 2024. Total ada 12 tim yang bersaing di turnamen ini.</p><p>Tim Indonesia, yang diperkuat para pemain muda, tampil menawan saat menghadapi Taiwan. Kedua tim sama-sama menurunkan pemain muda di AVC Challenge.</p><p>\"Taiwan memang yang turun U-20, sama seperti kita. Kemungkinan tim ini yang akan dikirim ke Indonesia mengikuti Kejuaraan Asia U-20 di Surabaya,” kata asisten pelatih Miko Fajar.</p><p>Menurut Miko, keberhasilan Indonesia menggapai kemenangan atas Taiwan itu akan meningkatkan mental bertanding.</p><p>\"Setidaknya bisa menang di pertandingan terakhir, biar mental dan percaya diri anak-anak meningkat,\" tutur Fajar.</p>', 'gambar/voli.jpg'),
(99, 'Minggu, 9 Juni 2024 | 07.56', 'Atletik Indonesia Bikin Prestasi di China', '<p>Tim atletik Indonesia berhasil mengukir prestasi pada ajang The 2nd Belt and Road Athletics Invitation Meeting yang berlangsung di Olympic Sports Center, Chongqing, China, pada 27 sampai 29 Mei 2024.</p><p>Dalam kompetisi ini, Indonesia yang mengirimkan sepuluh atlet di berbagai nomor, berhasil meraih satu medali perak dan satu medali perunggu.</p><p>Pelari Sri Maya Sari sukses meraih medali perak dalam nomor lari 400 meter putri dengan catatan waktu 53,62 detik. Sementara pelari asal Sumatera Utara, Nela Agustin, berhasil meraih medali perunggu di nomor lari 200 meter putri dengan catatan waktu 23,63 detik. Sekretaris Umum Pengurus Besar Persatuan Atletik Seluruh Indonesia (PB PASI), Tigor Tanjung, menyampaikan apresiasinya terhadap upaya para atlet yang telah berjuang maksimal.</p><p>\"Di Asia, China menempati posisi teratas dalam atletik, bukan hanya dari segi prestasi tapi juga fasilitas dan pembinaan. Atlet kita mendapatkan kesempatan luar biasa dengan mendapat undangan dari China. Secara umum, kami sangat mengapresiasi hasil yang telah dicapai karena mereka telah menampilkan yang terbaik,\" ujar Tigor seperti dikutip dari keterangan tertulis yang diterima pewarta.</p><p>Sementara itu, Dina Aulia yang turun di nomor 100 meter gawang putri finis di peringkat kelima dengan catatan waktu 13,42 detik. Muhammad Fauzan yang berlaga di nomor 800 meter putra berhasil mencapai final dan menduduki peringkat ketujuh dengan catatan 1 menit 55,00 detik.</p><p>Novia Nur Nirwani yang berlaga di nomor 800 meter putri juga mampu mencapai final dan menempati peringkat ketujuh dengan catatan waktu 2 menit 09,21 detik.</p><p>Atlet lompat jangkit Maesaroh menempati peringkat ke-12 dengan lompatan sejauh 12,11 meter, sementara Febri Prasetyo yang berlaga di nomor lompat jauh menempati peringkat ke-14 dengan lompatan 7,04 meter. Eventinus Gebze yang turun di nomor lempar lembing putra mencatatkan lemparan sejauh 59,98 meter dan menempati peringkat ke-13.</p><p>Muhammad Arief yang berlaga di nomor lompat jangkit putra mencatatkan lompatan 14,94 meter dan menempati peringkat ke-14. Terakhir, Attina Nurkamila Intan yang juga berlaga di nomor lempar lembing putri mencatatkan lemparan 48,10 meter dan menempati peringkat ke-17.</p><p>Tigor juga menyoroti prestasi Nela Agustin yang berpotensi memecahkan Rekor Nasional di nomor lari 200 meter putri. Lulusan PPLP Sumatera Utara ini mencatat prestasi luar biasa di nomor tersebut dengan melampaui rekor nasional sebelumnya 23,76 detik yang dipegang Alvin Tehupeiory sejak 2019.</p><p>\"Kami sangat bangga dengan capaian Nela, namun hasil ini masih harus disahkan melalui tes doping dan Nela telah menjalani pengambilan sampel di China. Kami berharap hasil tes tersebut negatif sehingga kita bisa sahkan menjadi rekor nasional baru di nomor 200 meter putri,\" ungkap Tigor. PB PASI juga menyampaikan terima kasih kepada BUMN holding pertambangan, MIND ID, atas dukungan mereka dalam bentuk sokongan pendanaan untuk pembinaan atlet-atlet atletik Indonesia.</p><p>\"Hubungan antara PB PASI dan MIND ID adalah hubungan timbal balik. Kami memiliki kewajiban memberikan manfaat dalam bentuk prestasi atlet yang membanggakan. Saya harap atlet, pelatih, dan tenaga pendukung sadar akan hal itu dan terus menciptakan prestasi-prestasi yang membanggakan,\" pungkas Tigor.</p>', 'gambar/atletik_169.jpeg'),
(100, 'Minggu, 9 Juni 2024 | 10.13', 'TEST', '<p>TEST</p>', 'gambar/aku.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(10, 'Sepak Bola', 'Berita tentang Sepak Bola'),
(11, 'Basket', 'Berita Tentang Bola Basket'),
(12, 'Badminton', 'Berita Tentang Bulu Tangkis'),
(13, 'MotoGP', 'Berita Tentang MotoGP'),
(14, 'Atletik', 'Berita Tentang Atletik'),
(15, 'Voli', 'Berita Tentang Bola Voli');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `password`) VALUES
(5, 'Aqwam Yuwatsiqul', 'qwamm03@gmail.com', '$2y$10$B7ZnigpNTHfdPIg35/1sse.ou/u0cKFQ5kl4Wd0jjZtKrv.4e/QXy'),
(6, 'Yuwatsiqul Aqwam', 'yuwatsiqulaqwan@gmail.com', '$2y$10$816llU74DPLf7wcg6Tr5cOYh5ySl3Uk84kRpI3SOYyh/XLQQsBSHm'),
(7, 'Aqwam', 'admin@gmail.com', '$2y$10$kdmRFTrVHXu6RWMBKOiM6.kOJUhRbzx4Zrml3amYrUHfUzD0n00di');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_artikel` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
