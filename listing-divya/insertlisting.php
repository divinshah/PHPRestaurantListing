<?php
    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con){
        echo "Not connected to server";
    }

    if(!mysqli_select_db($con,'listingtest')){
        echo "db not selected";
    }

    $Title = $_POST['listingname'];
    $City = $_POST['listingcity'];
    $Category = $_POST['listingcategory'];

    $sql = "insert into business (LISTING_NAME,LISTING_CATEGORY,LISTING_CITY) values ('$Title', '$City', '$Category')";

    if(!mysqli_query($con, $sql)){
        echo "Not inserted";
    }
    else{
        echo "inserted";
        header("Location: /listingdisplay.php");        
    }


?>