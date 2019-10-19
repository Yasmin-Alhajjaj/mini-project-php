<?php
include('connection.php');

$first_name = $last_name = $username = $email = $password =  "";

if(isset($_POST['SignUp'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['$password'];


    $sql = "INSERT INTO signup(firstname,lastname,username,email,password) VALUES ('$first_name','$last_name','$username','$email','$password')";
    if (mysqli_query($conn, $sql)) {
        // success
        header('Location: login.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Snipp - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="signup.php" class="nav-link">signUp</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Sign Up</h1>

              <div class="row block-9">
                <div class="col-md-6 pr-md-5 ">
                  <form action="<?php $_SERVER['PHP_SELF'] ?> " method="POST">
                      <div class="alert alert-error"></div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your firstName" name="first_name">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your lastName" name="last_name">
                      </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your userName" name="username">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Email" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Your password" name="password">
                    </div>

                    <div class="form-group">
                      <input type="submit" value="signUp" class="btn btn-primary py-3 px-5" name="SignUp">
                    </div>
                  </form>

                </div>

              </div>


          </div>
        </div>
      </div>
    </div>




  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>