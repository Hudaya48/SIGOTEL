<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/style.css" rel="stylesheet" />
    <script src="main.js"></script>
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
                            <a href="index.php"><h1><span>Si Gotel</span></h1></a>
                        </div>
                    </div>
                    <div class="navbar-collapse collapse">
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="index.php" class="active">Home</a></li>
                                <li role="presentation"><a href="l_hotel.php">List Hotel</a></li>
                                <li role="presentation"><a href="maps.php">Maps</a></li>
                                <li role="presentation"><a href="about.php">About Us</a></li>
                                <li><a href="login.php" data-toggle="modal" data-target=".bs-modal-sm">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
        </nav>
    </header>
    <section id="main-slider" class="no-margin">
    <div class="item active" style="background-image: url(images/slider/hotel1.jpg)">
    <div class="services">
        <div class="container">
            <form action="cek_login.php" method="post">
                <div class="form-group">
                    <div class="col-md-8">
                        <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>
                                    <input type="text" placeholder="Username" class="form-control" name="username">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" placeholder="Password" class="form-control" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Login" class="btn btn-primary">&nbsp&nbsp<input type="reset" value="Reset" class="btn btn-primary"> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php 
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                    echo '<div id="pesan" class="alert alert-danger">'.$_SESSION['pesan'].'</div>';
                                    }
                                    $_SESSION['pesan'] = '';
                                    ?>
                                </td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </section>
</body>
</html>
