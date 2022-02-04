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
                <li role="presentation"><a href="index.php">Home</a></li>
                <li role="presentation"><a href="l_hotel.php" class="active">List Hotel</a></li>
                <li role="presentation"><a href="maps.php">Maps</a></li>
                <li role="presentation"><a href="about.php">About Us</a></li>
                <li><a  href="#signup" data-toggle="modal" data-target=".bs-modal-sm">Login</a></li>
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
        <h1>Login</h1>
        <div id="myTabContent" class="tab-content">
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
      </ul>
    </div>
  </header>
</div>
  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li>List Hotel</li>
      </div>
    </div>
  </div>

  <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Informasi Hotel</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <p>Berisi berbagai informasi dari hotel yang dipilih, seperti foto,harga sewa,fasilitas dan lain-lain.</p>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Rute Menuju Hotel</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <p>Berisi petunjuk jalan untuk menju ke hotel yang dipilih.</p>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

  <div class="services">
    <div class="container">
      <h3>List Hotel</h3>
      <hr>
      <form method="post" action="search.php">
      <div class="input-group">
      <input id="cari" type="text" class="form-control" name="key" placeholder="Cari hotel">
      <span class="input-group-btn">
      <button class="btn btn-primary" type="submit" id="btn-search">Cari</button>
      <a href="l_hotel.php" class="btn btn-warning">Reset</a>
      </span>
      </div>
      </form>
      <?php
			if(isset($_POST['key'])){
			$key = $_POST['key'];
			echo "<b>Mencari Hotel : ".$key."</b>";
		}
		?>
        <div class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <table class="table" id="myTable">
          <thead>
            <tr>
              <th><center>No</center></th>
              <th><center>Nama Hotel</center></th>
              <th><center>Alamat</center></th>
              <th><center>Aksi</center></th>
            </tr>
            <?php
			include "koneksi.php";
				$key = $_POST['key'];
				if($key !=''){
				$query = mysqli_query($koneksi, "SELECT * FROM hotel WHERE nama_hotel LIKE '%".$key."%'");				
				}else{
					$query = mysqli_query($koneksi, "SELECT * FROM hotel");
					echo "<script>alert(\"Hotel Tidak Ditemukan\");location.href='l_hotel.php'</script>";
				}
				if(mysqli_num_rows($query)){
				$no=0;
			while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td><center><b>".++$no."</center></td>";
                echo "<td><center><b>$data[nama_hotel]</center></td>";
                echo "<td><b><div class='ex1'>$data[alamat]</center></div></td>";
                echo "<td><center><a href=\"lihat.php?id=$data[id]\"><button id='ubah' class='btn btn-info'\">
                      Info</button></a>
                      </td>";
                echo "</tr>";
				}}else{
					echo "<script>alert(\"Hotel Tidak Ditemukan\");location.href='l_hotel.php'</script>";
				}
				
		    ?>
        </table>
        </div>  
      </div>
     </div>
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
  <script src="js/ajax.js"></script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>
