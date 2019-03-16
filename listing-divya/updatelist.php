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

    //update query
    $sql = "update business set LISTING_NAME='$_POST[listingname]', LISTING_CITY='$_POST[listingcity]', LISTING_CATEGORY='$_POST[listingcategory]' where id='$_POST[id]'";

    //execute the query
    if(mysqli_query($con,$sql))
        header("refresh:1; url=updatelisting.php");
    else 
        echo "not updated";
     

?>