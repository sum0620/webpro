<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ekle Sil</title>
</head>
<body>
	<?php
	function klasor_ekle($klasor_adi){  
if(!is_dir($klasor_adi)){
 mkdir($klasor_adi);
 echo "Klasör eklendi.<br>";
 }
  }
 function klasor_sil($klasor_adi){
    if(is_dir($klasor_adi)){
 rmdir($klasor_adi);
 echo "Klasör silindi.<br>";
 }
 }
	?>

</body>
</html>