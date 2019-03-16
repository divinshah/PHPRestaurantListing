<!DOCTYPE html>
<html>
<body>

<h2>Business List </h2>



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
        $sql = "select * from business";

        //execute the query
        $records= mysqli_query($con,$sql);

        while ($row = mysqli_fetch_array($records))
        {
            echo "<tr>";
            echo "<h2>". ucfirst($row['LISTING_NAME']) ."</h2>";
            echo "<p><strong>". ucfirst($row['LISTING_CATEGORY']) ."</strong></p>";
            echo "<p>". ucfirst($row['LISTING_CITY']) ."</td>";
        }
    




?>

</body>
</html>

