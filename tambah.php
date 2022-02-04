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
        <li>Tambah Hotel</li>
      </div>
    </div>
  </div>

  <div class="services">
    <center><h3>Tambah Hotel Hotel</h3></center>
    <div class="container">
        <form action="tambah_hotel.php" method="post" id="input" enctype="multipart/form-data">
                    <label class="col-md-3 control-label" for="Title">Nama Hotel</label> 
                      <div class="col-md-6">
                        <input id="nama_hotel" name="nama_hotel" type="text" class="form-control input-md">
                      </div><br><br><br>
                    <label class="col-md-3 control-label" for="Title">Alamat</label> 
                      <div class="col-md-6">
                        <input id="alamat" name="alamat" type="text" class="form-control input-md">
                      </div><br><br><br>
                      <label class="col-md-3 control-label" for="Title">Latitude</label> 
                      <div class="col-md-6">
                        <input id="lat" name="lat" type="text" class="form-control input-md">
                      </div><br><br><br>
                    <label class="col-md-3 control-label" for="Title">Langitude</label> 
                      <div class="col-md-6">
                        <input id="lang" name="lang" type="text" class="form-control input-md">
                      </div><br><br><br>
                    <label class="col-md-3 control-label" for="Title">Harga</label> 
                      <div class="col-md-6">
                        <input id="harga" name="harga" type="text" class="form-control input-md">
                      </div><br><br><br>
                    <label class="col-md-3 control-label" for="Title">Fasilitas</label> 
                      <div class="col-md-6">
                        <input id="fasilitas" name="fasilitas" type="textarea" class="form-control input-md">
                      </div><br><br><br>
                      <label class="col-md-3 control-label" for="Title">Foto</label>
                      <div class="col-md-6">
                        <input type="file" name="gambar">
                      </div><br><br><br>
                      <center><input type="submit" class="btn btn-primary" id="submit" name="submit" >
                      <a href="manage.php"></center>
                      </a>
                    </center>
                  </form>
    </div>
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
