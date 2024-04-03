<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Rent4u</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <span>
              Rent4u
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="user_option">
              <a href="">
                Login
              </a>
            </div>
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="car.html">Cars</a>
                <a href="blog.html">Blog</a>
                <a href="contact.html">Contact Us</a>
                <a href="#">Login</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">
            <form>
              <?php
              $ad=$_POST['ad'];
              $tel=$_POST["tel"];
              $email=$_POST['email'];
              $mesaj=$_POST['mesaj'];
              $gmesaj=guvenli_icerik($mesaj);
              function guvenli_icerik($gelen){
 $giden = strip_tags($gelen);
 $giden = addslashes($giden);
 return $giden;
}
try{
  if (is_numeric($tel)) {
    if (empty($ad)||empty($tel)||empty($email)||empty($gmesaj)) {
                echo "<h2>Bilgileriniz eksik veya yanlıştır.<br>5 sn sonra Ana sayfaya yönlendiriliyorsunuz.</h2>";
                header("Refresh:5;url=contact.html");
              }
              else{
                echo "<h2>
          Aranma Talebi Oluşturması Başarılı
        </h2>";
        echo "<table><tr><td>".$ad."</td><td>".$tel."</tr><tr><td>".$email."</td></tr><tr><td>".$gmesaj."</td></tr></table>";
              }
  }
  else{
    throw new Exception("Lütfen telefon numarasını kontol ediniz <h2>5 sn sonra Ana sayfaya yönlendiriliyorsunuz.</h2>", header("Refresh:5;url=contact.html"));
    
    
  }
}
catch(Exception $e){
  echo $e->getMessage();
}


              
              ?>
              
            </form>
          </div>
        </div>
      </div>
      <div class="contact_items">

        <a href="">
          <div class="img-box">
            <img src="images/location.png" alt="">
          </div>
          <h6>
            Loram Ipusum ari
            lo elisant na
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="images/call.png" alt="">
          </div>
          <h6>
            (+12 1234456789)
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="images/mail.png" alt="">
          </div>
          <h6>
            demo@gmail.com
          </h6>
        </a>

      </div>
      <div class="social_container">
        <div class="social-box">
          <div>
            <a href="">
              <img src="images/fb.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      Copyright &copy; 2020 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>