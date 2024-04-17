<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listele</title>
</head>
<body>
	<?php
 function klasor_listele($konum){
 $klasor = opendir($konum);
 echo "<b>Klasörler Listeleniyor...</b><br>";
 while($dosya = readdir($klasor)){ 
    if (!is_dir($dosya)){         
        echo $dosya.'<br>';       
    }
  }
 }
 ?>
</body>
</html>