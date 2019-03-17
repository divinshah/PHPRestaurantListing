<!DOCTYPE html>
<html>
<body>

<h2>Update Business </h2>
<p><a href="logout.php">Click here</a> to Logout.</p>

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
    
    

?>
<table>
    <tr>
        <th>Business Title </th>
        <th>City</th>
        <th>Category </th>
    </tr>
    <?php

    session_start(); /* Starts the session */
    if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
    }
    while($row = mysqli_fetch_array($records))
    {
        echo "<form action=updatelist.php method=post>";
        echo "<td><input type=text name=listingname value= '".$row['LISTING_NAME']."'></td>";
        echo "<td><input type=text name=listingcity value= '".$row['LISTING_CITY']."'></td>";
        echo "<td><input type=text name=listingcategory value= '".$row['LISTING_CATEGORY']."'></td>";
        echo "<input type=hidden name=id value= '".$row['ID']."'></td>";
        echo "<td><input type=submit>";
        echo "</form></tr>";
    }
    
    
    ?>



</body>
</html>