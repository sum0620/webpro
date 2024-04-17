<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dosya İşlemleri</title>
</head>
<body>
	<?php
	 /*@mkdir("Resimler");
	 @mkdir("Resimler/profil52"); 
	 @mkdir("../profil52");
	// rmdir("Resimler/profil52");
	// rmdir("Resimler");
	 //rmdir("../profil52");
	 //$klasor = opendir("Resimler");
 //while($dosya = readdir($klasor)){ 
   // if (!is_dir($dosya)){  
     //   echo $dosya.'<br>';
             
    }
 }
*/
 
 $profilAdi="Sümeyrah";
 $yil="2024";
 @mkdir("Aylar");
 @mkdir("Aylar/".$profilAdi);
 @mkdir("Aylar/".$profilAdi."/".$yil);
 $aylar=["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz" , 
"Ağutos", "Eylül","Ekim","Kasım","Aralık"];
 for($i=0;$i<12;$i++){
 $url="Aylar/".$profilAdi."/".$yil."/".$aylar[$i];
 @mkdir($url);
 }

	?>

</body>
</html>                                                                                          