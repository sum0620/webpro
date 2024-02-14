<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Realistic
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sümeyrah</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- Superfish Menu -->
<script type="text/javascript" src="layout/scripts/superfish/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="layout/scripts/superfish/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish();
});
</script>
<!-- / Superfish Menu -->
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <h1><a href="index.html">Fonksiyonlar</a></h1>
    <p>Free Website Template</p>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="topbar">
    <div class="fl_left">Tel: xxxxx xxxxxxxxxx | Mail: info@domain.com</div>
    <div class="fl_right">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="topnav">
    <ul class="nav">
      <li class="active"><a href="index.html">Homepage</a></li>
      <li><a href="pages/style-demo.html">Style Demo</a></li>
      <li><a href="pages/full-width.html">Full Width</a></li>
      <li><a href="#">DropDown</a>
        <ul>
          <li><a href="#">menu item</a></li>
          <li><a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a>
                <ul>
                  <li><a href="#">menu item</a></li>
                  <li><a href="#">menu item</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
            </ul>
          </li>
          <li><a href="#">menu item</a></li>
        </ul>
      </li>
      <li><a href="pages/portfolio.html">Portfolio</a></li>
      <li class="last"><a href="pages/gallery.html">Gallery</a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="whitebox" id="hpage_services">
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Uygulama 1</strong>
        <p>
          <?php
          function dolarCevir($tutar){
            $dCevir=($tutar/30.74);
            return $dCevir;

          }
          function euroCevir($tutar){
            $eCevir=($tutar/32.90);
            return $eCevir;
          }
          function sterlinCevir($tutar){
            $sCevir=($tutar/38.59);
            return $sCevir;
          }
          $tl=3600;
          $d=dolarCevir($tl);
          $e=euroCevir($tl);
          $s=sterlinCevir($tl);
          echo $d."<br>".$e."<br>".$s;
          ?>
        </p>
      </div>
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Uygulama 2</strong>
        <p>
          <?php
          $boyunuz=164;
          $kilonuz=49;
          $sonuc=vki($boyunuz,$kilonuz);
          function vki($boy,$kilo){
            $boy=$boy/100;
            $Boy=$boy*$boy;
            $vki=round(($kilo/$Boy),2);
            yaz($vki);
          } 
          function yaz($hesap){
            if($hesap<"18.5"){
              echo"<div style='color:lime'>".$hesap."<span><br>ZAYIF</span></div>";
            }
            else if($hesap>="18.5" and $hesap<"24.9"){
              echo"<div  style=‘color:limegreen’>".$hesap."<span><br>Sağlıklı</span></br>";
            }
            else if ($hesap>="25" and $hesap<"29.9") {
              echo"<div style='color:orange'>".$hesap."<span><br>Fazla Kilolu</span></br>";
            }
            else if($hesap>="30" and $hesap<"34.9"){
              echo"<div  style=‘color:limegreen’>".$hesap."<span><br>1.Derce Obezite</span></br>";
            }
            else if ($hesap>="35" and $hesap<"39.9") {
              echo"<div style='color:red'>".$hesap."<span><br>2.Derce Obezite</span></br>";
            }
            else if ($hesap>="35" and $hesap<"39.9") {
              echo"<div style='color:maroon'>".$hesap."<span><br>3.Derce Obezite</span></br>";
            }
          }
          ?>
        </p>
      </div>
      <div class="block last"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum.</p>
      </div>
      <div class="spacer">&nbsp;</div>
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
      </div>
      <div class="block"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
      </div>
      <div class="block last"><img src="images/demo/46x46.gif" width="46" height="46" alt="" /><strong>Lorum ipsum dolor</strong>
        <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
      </div>
      <div class="clear"></div>
    </div>
    <!-- ####################################################################################################### -->
    <div id="hpage_latest">
      <ul>
        <li>
          <div class="imgholder"><a href="#"><img src="images/demo/260x180.gif" width="260" height="180" alt="" /></a></div>
          <p><strong>Lorum ipsum dolor</strong></p>
          <p>Orciint erdum condimen terdum nulla mcorper elit nam curabitur laoreet met prae senean et iac ulum. Metridiculis cons eque quis iaculum aenean nunc aenean.</p>
        </li>
        <li>
          <div class="imgholder"><a href="#"><img src="images/demo/260x180.gif" width="260" height="180" alt="" /></a></div>
          <p><strong>Lorum ipsum dolor</strong></p>
          <p>Orciint erdum condimen terdum nulla mcorper elit nam curabitur laoreet met prae senean et iac ulum. Metridiculis cons eque quis iaculum aenean nunc aenean.</p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="#"><img src="images/demo/260x180.gif" width="260" height="180" alt="" /></a></div>
          <p><strong>Lorum ipsum dolor</strong></p>
          <p>Orciint erdum condimen terdum nulla mcorper elit nam curabitur laoreet met prae senean et iac ulum. Metridiculis cons eque quis iaculum aenean nunc aenean.</p>
        </li>
      </ul>
      <br class="clear" />
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
    <div class="latestgallery">
      <h2>Latest Projects</h2>
      <ul>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
        <li class="last"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Latest From The Blog</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Keep In Touch</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>