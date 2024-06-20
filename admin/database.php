<?php
$servername = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "cms_blog";

$conn = mysqli_connect($servername, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
