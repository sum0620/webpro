<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>TEBRİKLER</h1>
	<?php
		$tc=$_POST["tc"];
		$adS=$_POST["adSoyad"];
		$yas=$_POST['yas'];
		$ePosta=$_POST["ePosta"];
		$tarih=$_POST['tarih'];
		 $uploadDir = "uploads/";
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Sadece resim dosyalarını kabul et
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (in_array($fileType, $allowedTypes)) {
        // Dosya yükleme
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
            echo "Fotoğraf başarıyla yüklendi.";
        } else {
            echo "Fotoğraf yüklenirken bir hata oluştu.";
        }
    } else {
        echo "Sadece JPG, JPEG, PNG & GIF dosyaları kabul edilir.";
    }
		$deneyim=$_POST['deneyim'];
		$pDil=$_POST['pDil'];
		$onay=$_POST['onay'];
		
		echo "<table>
				<tr>
					<td>T.C:</td>
					<td><input type='text' value=$tc></td>
				</tr>
				<tr>
				    <td>Ad Soyad</td>
					<td><input type='text' value=$adS></td>
				</tr>
				<tr>
					<td>Yas</td>
					<td><input type='text' value=$yas></td>
				</tr>
				<tr>
				    <td>E-Posta</td>
					<td><input type='text' value=$ePosta></td>
				</tr>
				<tr>
					<td>Profil</td>
					<td><img src=$targetFilePath width=100px></td>
				</tr>
				<tr>
				    <td>Tarih</td>
					<td><input type='text' value=$tarih></td>
				</tr>
				<tr>
					<td>Deneyim:</td>
					<td><input type='text' value=$deneyim></td>
				</tr>
				<tr>
				    <td>Programlama Dili</td>
					<td><input type='text' value=$pDil></td>
				</tr>
				<tr>
					<td>Onay:</td>
					<td><input type='text' value=$onay></td>
				</tr>
				


			</table>";
			?>


</body>
</html>