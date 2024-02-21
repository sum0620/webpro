<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
	<h2>Kodlama Eğitimi</h2>
	<h4>İletişim Formu</h4>
	<h6></h6>
	<?php
	echo "<table><tr>";
	echo"<td><input type='text' name='ad' class='form-control'  placeholder=Ad></td> <td><input type='text' name='Soyad' class='form-control'  placeholder=Soyad></td>";
	echo "</tr>";
	echo "<tr><td>";
	echo "<input type='phone' name='tel' class='form-control'  placeholder=(XXX)XXX XX XX></td>";
	echo "<td><input type='radio' name='c' class='form-control'  value='Kadın'>Kadın</td>";
	echo "<td><input type='radio' name='c' class='form-control'  value='Erkek'>Erkek</td>";
	echo "</tr><tr>";
	echo "<td><input type='e-mail' name='mail' class='form-control'  placeholder=E-Mail></td>";
	echo "</tr><tr>";
	echo "<td><textarea placeholder=Özgeçmiş></textarea></td>";
	echo "</tr><tr>";
	echo "<td><input type='submit' name='mail' class='form-control'  value=Gönder></td>";
	echo "</tr></table>";
	?>

</body>
</html>