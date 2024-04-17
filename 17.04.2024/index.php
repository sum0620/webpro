<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
    @mkdir("Dosyaislemleri");
    @mkdir("Dosyaislemleri/aktif");
    @mkdir("Dosyaislemleri/mezun");
    unlink("Dosyaislemleri/aktif/03numaraliOgrenci.txt");
 unlink("Dosyaislemleri/aktif/06numaraliOgrenci.txt");
 unlink("Dosyaislemleri/aktif/16numaraliOgrenci.txt");

 echo "3 Öğrencinin dosya bilgileri silindi.";

 @touch("Dosyaislemleri/mezun/03numaraliOgrenci.txt");
 @touch("Dosyaislemleri/mezun/06numaraliOgrenci.txt");
 @touch("Dosyaislemleri/mezun/16numaraliOgrenci.txt");
 echo "3 Öğrenci için yeni dosyalar oluşturuldu.";

	?>

</body>
</html>