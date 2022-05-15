<!doctype html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="still.css">
  <script  src="jquery.js"></script>
  <script  src="popper.min.js"></script>
  <script src="js.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <title>Mirasımız</title>
</head>
<body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="navbar navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" 
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01" >
          <a class="navbar-brand" >EMİRHAN ETLİ</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
              <a class="nav-link" href="hakkımda.html" >Hakkımda </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="özgeçmişim.html">Özgeçmişim</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mirasımız.html">Mirasımız</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ilgiAlanlarim.php">İlgi Alanlarım</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="iletişim.html">İletişim</a>
            </li>                 
          </ul>
          <a href="login.html" class="btn btn-outline-secondary" role="button" aria-pressed="true">Login</a> 
         </div>
    </nav> 
<form class="login-form text-light">
        <div class="form-input-material">
        <h1 class ="text-center" >İLETİŞİM FORMUNUZ GÖNDERİLDİ!</h1>
            <div class = "container text-center">
            <?php 
            echo "Ad:".$_POST['isim']."<br>";
            echo "Soyad:".$_POST["soyisim"]."<br>";
            echo "E-mail:".$_POST["email"]."<br>";
            echo "Yaş:".$_POST["yas"]."<br>";
            $selected_cinsiyet = $_POST["cinsiyet"];
            echo "Cinsiyet:".$_POST["cinsiyet"]."<br>";
            echo "Doğum günü:".$_POST["dgunu"]."<br>";
            echo "Meslek:".$_POST["meslek"]."<br>";
            echo "Mesaj:".$_POST["textarea"]."<br>";
            ?>
            <button class=" btn btn-ghost bg-dark fw-bold"> <a href="hakkımda.html">Ana Sayfaya Dön</a> </button>
            </div>
           
        </div>
    </form>
</body>
</html>