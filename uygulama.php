<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <div style="background-color:orange; width:250px;text-align:center">
            <form action="uygulama.php" method="get" >
              <input type="text" name="tahmin_edilen"><br>              
              <input type="submit" value="Tahmin Et">
            </form>
        </div>
         <?php
 if(!isset($_COOKIE['tutulan_sayi'])) {    
    $cookie_deger = rand(0,10);
    setcookie("tutulan_sayi", $cookie_deger,time() + 3600); 
  } else {
    if(isset($_GET['tahmin_edilen']))
    {
       if($_GET['tahmin_edilen']==$_COOKIE['tutulan_sayi']){
           echo "Tebrikler. Sayıyı Doğru Tahmin Ettiniz.";
       }else{
           echo "Tekrar Tahminde Bulununuz.";
       }
    }
  }
  ?>
</body>
</html>