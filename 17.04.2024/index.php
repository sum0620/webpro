<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ana Sayfa</title>
</head>
<body>
	 <?php
 require_once("ekle_sil.php");
 require_once("listele.php");
 klasor_ekle("Kayitlar"); 
klasor_ekle("Kayitlar/Sümeyrah");
 klasor_ekle("Kayitlar/Selman");
 klasor_listele("Kayitlar");
  klasor_sil("Kayitlar/Sümeyrah");
 klasor_sil("Kayitlar/Selman");
 ?>

</body>
</html>