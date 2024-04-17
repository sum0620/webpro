<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	/*@mkdir("Dosyalarim"); 
 $dosya_isimleri = array("kayit1","kayit2","kayit3","kayit4","kayit5");
 for($i=0;$i<count($dosya_isimleri);$i++){
 touch("Dosyalarim/".$dosya_isimleri[$i].".txt");
 }
 @mkdir("Dosyalarim");
 @touch("Dosyalarim/dosya.txt");
 $dosya = fopen('Dosyalarim/dosya.txt', 'r+');
 $dosya_boyutu = filesize('Dosyalarim/dosya.txt');
 $dosya_icerigi=fread($dosya,$dosya_boyutu);
 echo "<b style='font-size:25px; background-color:orange'> $dosya_icerigi  </b>";
 fclose($dosya);
 */
 //touch("Dosyalarim/liste.txt");
  $dosya = fopen('Dosyalarim/liste.txt','r');
 while(!feof($dosya)){
 $okunan_satir=fgets($dosya);
 echo "<ul type='circle'>
 <li style='background-color:pink'> $okunan_satir </li>
 </ul>" ;
 }
 fclose($dosya);

	?>

</body>
</html>