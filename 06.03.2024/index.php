<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel=“stylesheet” href=“https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/
 dist/css/bootstrap.min.css”>
    <script src=“https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/
 jquery.min.js”></script>
    <script src=“https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/
 umd/popper.min.js”></script>
    <script src=“https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/
 bootstrap.min.js”></script>
  <style>
        div{
            margin:auto;
            margin-top:20px;
            height:auto;
            width:500px;
            color:white;
            border:2px solid black;
            padding:25px;
            background:lightskyblue;
        }
 </style>
</head>
<body>
<div>
	<form action="kontrol.php" name="Kontrol" method="post">
		<h3 align="center">Sisteme Giriş</h3>
		<table cellpadding="5px" width="450px">
			<tr>
				<td>Kullanıcı Adı:</td>
				<td><input type="text" name="kAd" maxlength="11" placeholder="Kullanıcı Adı"></td>
			</tr>
			<tr>
				<td>Şifreniz:</td>
				<td><input type="password" name="sifre" placeholder="Şifreniz"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Giriş için tıklayın" style="width:450px;color:white;"></td>
			</tr>
		</table>
	</form>
</div>

</body>
</html>