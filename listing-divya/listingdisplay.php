<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
        background-image: url("images/footer1.jpg");
        padding: 30px 0px 30px 0px;
        margin-top: 40px;
        }
        
      </style>
<body>

<!-------- Header --------->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top navbar-custom">
  <a class="navbar-brand" href="#">TO</a>
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
        <a class="nav-link" href="#">Contact</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="listingform.html"><button type="button" class="btn btn-outline-light">+Add Listing</button></a>
      </li> 
    </ul>
  </div>  
</nav>
<div class="jumbotron">
<div class="containerH">
  <h1>Businesses</h1> 
    </div>
</div>
<div class="container">
<h2>Business List </h2>
<a href="listingform.html">Add listing</a>



<?php

        $con = mysqli_connect('127.0.0.1','root','');
        //connect server
        if(!$con){
            echo "Not connected to server";
        }
        //select database
        if(!mysqli_select_db($con,'listingtest')){
            echo "db not selected";
        }

        //query
        $sql = "select * from businesses";

        //execute the query
        $records= mysqli_query($con,$sql);

        while ($row = mysqli_fetch_array($records))
        { 
          echo "<div class='row'>";
          echo "<div class='col-sm-6'>";
          echo "<tr>";
          echo "<h2>". ucfirst($row['listing_name']) ."</h2>";
          echo "<p><strong>". ucfirst($row['listing_category']) ."</strong></p>";
          echo "<p>City:". ucfirst($row['listing_city']) ."</td>";
          echo "<p>Contact:". ucfirst($row['listing_contact']) ."</td>";
          echo "<p>Email:". ucfirst($row['listing_email']) ."</td></div></div>";
          

            
        }
    




?>
</div>
 <!--    Footer   -->
<div class="footer text-center text-white" style="margin-bottom:0">
  <h1 class="display-1 text-center">TO</h1>
  <p>Toronto's very own</p>
  <div class="row">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4" ></div>
    <div class="col-sm-4"><a href="https://www.facebook.com/"><img src="images/facebook-logo.png" height="40px" alt="facebook"></a>&nbsp &nbsp<a href="https://www.instagram.com/"><img src="images/instagram-logo.png" class="float" height="40px" alt="instagram"></a></div>
      
    </div>
  </div>
</div>
</div>

</body>
</html>

