<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<style>
 .arkap{
 margin:auto;
 margin-top:20px;
 height:500px;
 width:500px;
 color:honeydew;
 border:2px solid black;
 padding:25px;
 margin-left:10px;
 background:goldenrod
 }
 .form{
 height:75px;
 width: auto;
 }
 #resimText{
 width:250px;
 float:left;
 margin-right:10px;
 }
 #buton{
 width:180px;
 }
 .resim{
 height:325px;
 width: auto;
 padding-left:150px;
 padding-top:150px;
 border:2px dotted honeydew;
 background-image:url(‘img/resim1.jpg’);
 background-size:cover;
 }
 </style>
</head>
<body>
	<div class="arkap">
		<form action="resim.php" name="resim" method="post">
			<h1 align="center">Resmi Geti</h1>
 <div class="form">
 <input type="text"id="resimText" name="resimAdi"placeholder="Resim adı">
 <button class="btn btn-outline-primary" id="buton">
Getir</button>
</div>
<?php
if ((!empty($_POST['resimAdi'])) {
	$text=$_POST['resimAdi'];
	$text="img/".$text.".jpg";
	echo "<div  class='resim' style='background-image:
url($text)'></div>";

}
else{
	echo "<div class='resim' style='background-image:
url(img/resim1.jpg)'></div>";
}
?>
		</form>
	</div>

</body>
</html>