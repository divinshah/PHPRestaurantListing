<?php
include "header.php";
?>

<html>
<body>
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
          echo "<h2><a href='listingpage.php?id=" .$row['ID'] . "'>". ucfirst($row['listing_name']) ."</a></h2>";
          echo "<p><strong>". ucfirst($row['listing_category']) ."</strong></p>";
          echo "<p>City:". ucfirst($row['listing_city']) ."</td>";
          echo "<p>Contact:". ucfirst($row['listing_contact']) ."</td>";
          echo "<p>Email:". ucfirst($row['listing_email']) ."</td></div></div>";
          

            
        }
    




?>
</div>
</body>
</html>
 <!--    Footer   -->
 <?php
include "footer.php";
?>
