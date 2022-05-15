<!doctype html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" href="still.css">
  <link rel="stylesheet" href="dist/skitter.css"  type="text/css" media="all" rel="stylesheet"/>
  <script  src="jquery.js"></script>
  <script  src="popper.min.js"></script>
  <script src="js.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <title>İlgi Alanlarım </title>
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
</div>
</nav>
<body>
  <h2 class ="ortala">İLGİ ALANLARIM</h2>
  <section>
<div class="container mt-4 " >
  <div class="row">
    <div class="col-sm-12">
      <div class="card tabloortala figure arkaplan ">
        <div class="card-body">
          <div class = "card-title text-center text-white">
            <h3>FUTBOL</h3>
            <div class="card-text">
              Çoğu erkek gibi bende futbol oynamayı,izlemeyi çok severim.
            </div>
          </div>
        </div>
        <img src="futbol.jpg" class= "img-fluid" alt="futbol">
      </div>
    </div>
  </div>
</div>
  </section>
  <h2 class = "ortala2">BAZI SEVDİĞİM FUTBOLCULAR</h2>
  <section style = "border:solid  1px black; width:100%;">
    <div class="container mt-4">
    <div class="row">
    <div class ="col-sm-6" >
      <div class = "figure">

      <?php
          
$ids = [103051168, 1135663375, 322456720, 659972248];

$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'apiv3.apifootball.com/?action=get_players&APIkey=b52ee16b30ef4512dfe5247893d6e64ac42ff7b04f00c7b09903f7e3a19a1072&player_id='.$ids[0],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
      ));
      
      $response = curl_exec($curl);
      $decoded = json_decode($response)[0];

      echo"<img src=\"". $decoded->player_image."\">";

curl_close($curl);
      ?>
      </div>
    </div>
    <div class = "col-sm-6">    
      <?php
        echo "OYUNCUNUN ADI: " ."$decoded->player_name". "</br>";
        echo "OYUNCUNUN ÜLKESİ: " ."$decoded->team_name". "</br>";
        echo "OYUNCUNUN YAŞI: " ."$decoded->player_age". "</br>";
        echo "BU SEZON ATTIĞI GOL SAYISI: " ."$decoded->player_goals". "</br>";
        echo "BU SEZON OYNADIĞI MAÇ SAYISI: " ."$decoded->player_match_played". "</br>";
        echo "FORMA NUMARASI: " ."$decoded->player_number". "</br>";
      ?>
      </div>
    </div>
  </div>
  </section>
  <section class ="mt-4 ilgiSection" style = "border:solid  1px black; width:100%;">
    <div class="container mt-4">
    <div class="row">
    <div class ="col-sm-6" >
      <div class = "figure">

      <?php
          
$ids = [103051168, 1135663375, 322456720, 659972248];

$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'apiv3.apifootball.com/?action=get_players&APIkey=b52ee16b30ef4512dfe5247893d6e64ac42ff7b04f00c7b09903f7e3a19a1072&player_id='.$ids[1],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
      ));
      
      $response = curl_exec($curl);
      $decoded = json_decode($response)[0];

      echo"<img src=\"". $decoded->player_image."\">";

curl_close($curl);
      ?>
      </div>
    </div>
    <div class = "col-sm-6">    
      <?php
        echo "OYUNCUNUN ADI: " ."$decoded->player_name". "</br>";
        echo "OYUNCUNUN ÜLKESİ: " ."$decoded->team_name". "</br>";
        echo "OYUNCUNUN YAŞI: " ."$decoded->player_age". "</br>";
        echo "BU SEZON ATTIĞI GOL SAYISI: " ."$decoded->player_goals". "</br>";
        echo "BU SEZON OYNADIĞI MAÇ SAYISI: " ."$decoded->player_match_played". "</br>";
        echo "FORMA NUMARASI: " ."$decoded->player_number". "</br>";
      ?>
      </div>
    </div>
  </div>
      </section>    
  <section class="mt-4 ilgiSection" style = "border:solid  1px black; width:100%;">
    <div class="container mt-4">
    <div class="row">
    <div class ="col-sm-6" >
      <div class = "figure">

      <?php
          
$ids = [103051168, 1135663375, 322456720, 659972248];

$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'apiv3.apifootball.com/?action=get_players&APIkey=b52ee16b30ef4512dfe5247893d6e64ac42ff7b04f00c7b09903f7e3a19a1072&player_id='.$ids[2],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
      ));
      
      $response = curl_exec($curl);
      $decoded = json_decode($response)[0];

      echo"<img src=\"". $decoded->player_image."\">";

curl_close($curl);
      ?>
      </div>
    </div>
    <div class = "col-sm-6">    
      <?php
        echo "OYUNCUNUN ADI: " ."$decoded->player_name". "</br>";
        echo "OYUNCUNUN ÜLKESİ: " ."$decoded->team_name". "</br>";
        echo "OYUNCUNUN YAŞI: " ."$decoded->player_age". "</br>";
        echo "BU SEZON ATTIĞI GOL SAYISI: " ."$decoded->player_goals". "</br>";
        echo "BU SEZON OYNADIĞI MAÇ SAYISI: " ."$decoded->player_match_played". "</br>";
        echo "FORMA NUMARASI: " ."$decoded->player_number". "</br>";
      ?>
      </div>
    </div>
  </div>
      </section>  
  <section class  ="mt-4 ilgiSection" style = "border:solid  1px black; width:100%;">
    <div class="container mt-4">
    <div class="row">
    <div class ="col-sm-6" >
      <div class = "figure">

      <?php
          
$ids = [103051168, 1135663375, 322456720, 659972248];

$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'apiv3.apifootball.com/?action=get_players&APIkey=b52ee16b30ef4512dfe5247893d6e64ac42ff7b04f00c7b09903f7e3a19a1072&player_id='.$ids[3],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
      ));
      
      $response = curl_exec($curl);
      $decoded = json_decode($response)[0];

      echo"<img src=\"". $decoded->player_image."\">";

curl_close($curl);
      ?>
      </div>
    </div>
    <div class = "col-sm-6">    
      <?php
        echo "OYUNCUNUN ADI: " ."$decoded->player_name". "</br>";
        echo "OYUNCUNUN ÜLKESİ: " ."$decoded->team_name". "</br>";
        echo "OYUNCUNUN YAŞI: " ."$decoded->player_age". "</br>";
        echo "BU SEZON ATTIĞI GOL SAYISI: " ."$decoded->player_goals". "</br>";
        echo "BU SEZON OYNADIĞI MAÇ SAYISI: " ."$decoded->player_match_played". "</br>";
        echo "OYUNCUNUN OYNADIĞI POZİSYON: " ."$decoded->player_type". "</br>";
      ?>
      </div>
    </div>
  </div>
      </section>
<div class="footer mt-4">
  <footer class="py-2 bg-dark text-white text-center footer">
   Web-Teknolojileri-Projesi © Emirhan ETLİ 2022
  </footer> 
</body>
</html>