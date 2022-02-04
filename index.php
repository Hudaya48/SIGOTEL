<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sigotel</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
 <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert-warning'><center><strong>Username dan Password tidak sesuai !</strong></center></div>";
    }
  }
  ?>
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
              <a href="index.php"><h1><span>Si Gotel</span></h1></a>
            </div>
          </div>
          <div class="navbar-collapse collapse">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"><a href="index.php" class="active">Home</a></li>
                <li role="presentation"><a href="l_hotel.php">List Hotel</a></li>
                <li role="presentation"><a href="about.php">About Us</a></li>
                <li><a  href="#login" data-toggle="modal" data-target=".bs-modal-sm">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" role="form1" method="post" action="cek_login.php" accept-charset="UTF-8">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
</header>
 
 <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/hotel1.jpg)">
          <div class="container">
            <div class="row slide-margin">
              <div class="col-sm-10">
                <div class="carousel-content">
                  <h2 class="animation animated-item-1">Welcome To</h2>
                  <h2 class="animation animated-item-1"><span>Si Gotel</span></h2>
                  <p class="animation animated-item-2">SiGotel (Sistem Informasi Geografis Hotel) Adalah Sistem Informasi yang menyediakan informasi seputar hotel yang ada di kota bandung.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  </section>
  <!--/#main-slider-->
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
              Designed by <a href="https://www.Facebook.com/hudaya48">SiGotel</a></div>
          </div>
        </div>
      </div>

      <div class="pull-right">
        <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
      </div>
    </div>
  </footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
