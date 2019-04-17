<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tour Site</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="images/favicon.png" rel="icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/HFstyle.css">
    <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }
        .navbar-custom{
        background-color: #123977;
        }
        .navbar a{
        color: white !important;
        font-size: 1.2em !important;
        }
        .navbar li{
        padding-right: 5px;
        }
        label {
        font-weight:bold;
        width:100px;
        font-size:14px;
        }
        .box {/**/
        border:#ffffff solid 1px;
        }
        .container{
            padding-top: 50px;
        }
        .footer{
        background-image: url("images/footer1.jpg");
        padding: 30px 0px 30px 0px;
        }
        
      </style>
</head>
<body>

  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light" text style="color:#fff" ><a href="#header"><!--<span>TO</span>--></a></h1>
      </div>

      <nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-custom">
        <!--<a class="navbar-brand" href="#">TO</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Explore</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>                
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blogs</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#">Event</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#">Offers</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-login.php">Login</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="listingform.html"><button type="button" class="btn btn-outline-light">+Add Listing</button></a>
            </li> 
          </ul>
        </div>  
      </nav>
  </header>

<!--Php code-->
<?php

require_once 'Database.php';
require_once 'User.php';

$db = Database :: getDB();
$u = new User();


if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $login = $u -> checkLoginCredentails($email,$pwd, $db);
    
    foreach($login as $l)
    {
        $id = $l->id;
    }
    if($login)
    {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: user-detail.php?id=$id");
    }
    else 
    {
        echo "Invalid login credentials";
    }
}


?>

<div class="jumbotron">
    <div class="container">
        <h1>Login</h1>
    </div>
</div>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Email ID :</label>
            <input name="email" class="form-control" placeholder="Enter your email" type="text">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input name="pwd" class="form-control" placeholder="Enter Password" type="password">
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
        <div class="form-group">
            Don't have an account? <a href="Add_User.php" class="ml-2">Sign Up</a>
        </div>
    </form>
</div>
      <div class="footer text-center text-white" style="margin-bottom:0">
  <h1 class="display-1 text-center">TO</h1>
  <p>Toronto's very own</p>
  <div class="row">
    <div class="col-sm-2" ></div>
    <div class="col-sm-6" >
      <div class="container bottom-menu">
        
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Feedbacks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Newsletter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gift Cards</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Admin Login</a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="col-sm-4"><a href="https://www.facebook.com/"><img src="images/facebook-logo.png" height="40px" alt="facebook"></a>&nbsp &nbsp<a href="https://www.instagram.com/"><img src="images/instagram-logo.png" class="float" height="40px" alt="instagram"></a></div>
      
    </div>
  </div>
</div>
</div>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
