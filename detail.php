<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SiGotel</title>

<!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
            <div class="navbar-brand">
              <a href="index.php"><h1><span>Si </span>Gotel</h1></a>
            </div>
          </div>

          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="services.html" class="active">Manage Hotel</a></li>
                <li class="dropdown">
                <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Hai,Admin
                  <span class="caret"></span></a>
                  <ul role="presentation" class="dropdown-menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

   <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="manage.php">Home</a></li>
        <li>Detail Hotel</li>
      </div>
    </div>
  </div>
  <br>
      <div class="container">
        <div class="row">
            <div class="span5">

              <?php
                include "koneksi.php";
                 $no=0;
                 $query = mysqli_query($koneksi,  "SELECT * FROM hotel  WHERE id = $_GET[id]");
                 while ($data = mysqli_fetch_array($query)) {
                  echo "<td><center><img src='images/".$data['gambar']."' width='500' height='500'></center></td>";
                }
             ?>
            </div>
            <div class="span7">
              <?php
                include "koneksi.php";
                 $no=0;
                 $query = mysqli_query($koneksi,  "SELECT * FROM hotel  WHERE id = $_GET[id]");
                 while ($data = mysqli_fetch_array($query)) {
                  echo "<h2>$data[nama_hotel]<br></h5>";
                }
             ?>
            </div>
        </div>
        <div class="row product-info">
            <div class="span12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Detail Hotel</a></li>
                </ul>
                <?php
                include "koneksi.php";
                 $no=0;
                 $query = mysqli_query($koneksi,  "SELECT * FROM hotel  WHERE id = $_GET[id]");
                 while ($data = mysqli_fetch_array($query)) {
               
                echo "<div class='tab-content'>
                    <div id='tab-1' class='tab-pane fade in active'>
                        <table class='table table-striped'>
                            <tbody>
                                <tr>
                                    <th>Harga Permalam</th>
                                    <td>Rp. $data[harga]</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>$data[alamat]</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td>$data[fasilitas]</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>";
 }
             ?>
       
       <div class="konten">
      <?php 
$id = $_GET['id'];
  include_once "ambildata_id.php";
  $obj = json_decode($data);
  $titles="";
  $id="";
  $profil="";
  $alamat="";
  $lat="";
  $lng="";
foreach($obj->results as $item){
  $titles.=$item->nama_hotel;
  $id.=$item->id;
  $profil.=$item->harga;
  $alamat.=$item->alamat;
  $lat.=$item->lat;
  $lng.=$item->lang;
}

$title = "Detail dan Lokasi : ".$titles;
include "koneksi.php";?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlGTonSRLOOUIWTNI7COAQrnZs1VKA6fQ&callback=initMap" type="text/javascript"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $lng ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'images/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <center>
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
                <div id="map-canvas" style="width:100%;height:430px;"></div>
            </div>
          </div>
        </div>
        </center>
            </div>
  <footer>
    <div class="footer">
      <div class="container">
        <div class="social-icon">
          <div class="col-md-4">
            <ul class="social-network">
              <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-4">
          <div class="copyright">
            &copy;All Rights Reserved.
            <div class="credits">
              Designed by <a href="https://www.Facebook.com/hudaya48">Si Gotel</a></div>
          </div>
        </div>
      </div>
      
      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>
