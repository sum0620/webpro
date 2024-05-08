<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Öğrenci Kayıt Formu</title>
  <style type="text/css">form {
  max-width: 300px;
  margin: 40px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"], input[type="date"], select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e4</style>
  
</head>
<body>
  <form method="get">
    <label for="ogr_ad">Ad:</label>
    <input type="text" id="ogr_ad" name="ogr_ad"><br><br>
    <label for="ogr_soyad">Soyad:</label>
    <input type="text" id="ogr_soyad" name="ogr_soyad"><br><br>
    <label for="ogr_no">Öğrenci No:</label>
    <input type="text" id="ogr_no" name="ogr_no"><br><br>
    <label for="ogr_sinif">Sınıf:</label>
    <input type="text" id="ogr_sinif" name="ogr_sinif"><br><br>
    <label for="ogr_cinsiyet">Cinsiyet:</label>
    <select id="ogr_cinsiyet" name="ogr_cinsiyet">
      <option value="ERKEK">Erkek</option>
      <option value="KIZ">Kız</option>
    </select><br><br>
    <label for="ogr_alan">Alan:</label>
    <input type="text" id="ogr_alan" name="ogr_alan"><br><br>
    <label for="ogr_dtarih">Doğum Tarihi:</label>
    <input type="date" id="ogr_dtarih" name="ogr_dtarih"><br><br>
    <input type="submit" value="Kaydet">
  </form>

<?php
 $baglanti = mysqli_connect("localhost", "root", "", "okul");
 
if($baglanti === false){
    die("Bağlantı Hatası:" . mysqli_connect_error());
 }
 

 
 $sorgu = "INSERT INTO ogrenci (id, ogr_ad, ogr_soyad, ogr_no, ogr_sinif, ogr_cinsiyet, ogr_alan, ogr_dtarih) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)";

 if($stmt = mysqli_prepare($baglanti, $sorgu))
  {
    $ogr_ad = $_GET['ogr_ad'];
    $ogr_soyad =$_GET['ogr_soyad'];
    $ogr_no = $_GET['ogr_no'];
    $ogr_sinif=$_GET['ogr_sinif'];
    $ogr_cinsiyet=$_GET['ogr_cinsiyet'];
    $ogr_alan=$_GET['ogr_alan'];
    $ogr_dtarih=$_GET['ogr_dtarih'];
    mysqli_stmt_bind_param($stmt,"sssssss",$ogr_ad, $ogr_soyad, $ogr_no,$ogr_sinif,$ogr_cinsiyet,$ogr_alan,$ogr_dtarih);
    mysqli_stmt_execute($stmt);
      echo "Kayıtlar başarıyla eklendi";
 }
 else{
    echo "Hata:" . mysqli_error($baglanti);
 }
 
mysqli_stmt_close($stmt);
 mysqli_close($baglanti);
 ?>

</body>
</html>