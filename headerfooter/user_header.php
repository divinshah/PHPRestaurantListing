<!DOCTYPE html>
<html lang="en">
<head>
  <title>TO listing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  
  .carousel-inner img {
      width: 100%;
      height: 100%;
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
    /*.jumbotron{
        background-image: url("images/footer1.jpg");
    }*/
  </style>
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
        .nav-item{

        }
        .navbar li{
        padding-right: 5px;
        }
        .box {
        border:#ffffff solid 1px;
        }
        .containerH{
            padding-top: 50px;
        }
        .footer{
        background-image: url("../images/footer1.jpg");
        padding: 30px 0px 30px 0px;
        margin-top: 40px;
        }
        
      </style>

</head>
<body>

    <?php
    require_once '../model/Database.php';
    require_once '../model/User.php';
    $db = Database::getDb();
    
    $u = new User();
    session_start();
    $email = $_SESSION['email'];
    
    $login = $u -> getUseridByEmail($email, $db);
    
    foreach($login as $l)
    {
        $id = $l->id;
    }
    if($login)
    {
        //session_start();
        $_SESSION['email'] = $email;
        //header("Location: user-detail.php?id=$id");
    }
    else 
    {
        echo "Invalid login credentials";
    }
    //echo $id;
    ?>
<!-----------------   NavBar      -------------->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-custom">
  <a class="navbar-brand" href="#">TO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../User-Panel/user-detail.php?id=<?= $id; ?>">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../feedback-ridham/addfeedback.php">Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../User-Panel/Change_Pwd.php?id=<?= $id; ?>">Change Password</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#"><button type="button" class="btn btn-outline-light">My Business</button></a>
      </li>
      <li class="nav-item">         
        <a class="nav-link" href="../User-Panel/Logout.php?id=<?= $id; ?>">Logout</a>
      </li>
    </ul>
  </div>  
</nav>

    