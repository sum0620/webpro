<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<?php
 function yasHesapla($yil) {
 if(is_string($yil)) {
 throw new Exception("Sadece yıl bilgisi giriniz.");
 }
 $sonuc=2021-$yil;
 return $sonuc;
 }
 try {
 $yas=yasHesapla(1988);
 echo "<b>Yaşınız=</b>".$yas."<br>";
 $yas=yasHesapla(2001);
 echo "<b>Yaşınız=</b>".$yas."<br>";
 $yas=yasHesapla("ikibin");
 echo "<b>Yaşınız=</b>".$yas;
 }
 catch(Exception $e) {
 echo "<b style=‘color:red’>Hata mesajı:</b> " .$e->getMessage();
 }
 finally
 {
 echo "<br>";
 echo "<b style=‘background-color:orange’>
 -Yaşamınızda mutluluklar dileriz.</b>";
 }
?>

</body>
</html>