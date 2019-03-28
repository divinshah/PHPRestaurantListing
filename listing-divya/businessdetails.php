<?php
$con = mysqli_connect('127.0.0.1','root','');

if(!$con){
    echo "Not connected to server";
}

if(!mysqli_select_db($con,'listingtest')){
    echo "db not selected";
}

//check if URL is set and exist in the db
if (isset($_GET['id'])){
    $id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
    // Use this var to check to see if this ID exists, if yes then get the product 
    // details, if no then exit this script and give message why
    $sql = mysql_query("SELECT * FROM businesses WHERE id='$id' LIMIT 1");
    $productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
        while($row = mysql_fetch_array($sql)){ 
            $listing_name = $row["listing_name"];
            $liting_category = $row["listing_category"];
            $listing_city = $row["listing_city"];
            $listing_contact = $row["listing_contact"];
            $listing_email = $row["listing_email"];
            
        }
    }
    else {
		echo "Business does not exist.";
	    exit();
    }
else {
    echo "Data to render this page is missing.";
    exit();
    }
}


?>