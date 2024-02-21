<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	$ad =$_POST['ad'];
	$soyad=$_POST['soyad'];
	$cep=$_POST['cep'];
	$cins=$_POST['cins'];
	$posta=$_POST['posta'];
	$cv=$_POST['cv'];
	echo "<pre>Ad Soyad:".$ad.$soyad."<br>"."Cep:".$cep."<br>"."Cinsiyet".$cins."<br>"."E-posta".$posta."<br>"."CV".$cv."</pre>";
	?>

</body>
</html>