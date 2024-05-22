<?php
$servername = "localhost";
$username   = "root";
$password   = "";

// MySQL sunucusuna bağlan
$baglanti = mysqli_connect($servername, $username, $password);

if ($baglanti === false) {
    die("Bağlantı Hatası: " . mysqli_connect_error());
}

// Veritabanını seç
if (mysqli_select_db($baglanti, "haberler_db") === false) {
    die("Bağlantı Hatası: Unknown database 'haberler_db'");
}
?>