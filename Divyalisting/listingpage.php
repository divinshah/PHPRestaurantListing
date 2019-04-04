
<?php
include "header.php";


$con = mysqli_connect('127.0.0.1','root','');
//connect server
if(!$con){
    echo "Not connected to server";
}
//select database
if(!mysqli_select_db($con,'listingtest')){
    echo "db not selected";
}

$sql = "SELECT * FROM businesses WHERE ID = ' " . $_GET['id'] . "'";
$records= mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($records))
        {
            echo "<div class='jumbotron'>
                <div class='containerH'>
                <h1>" .ucfirst($row['listing_name']) ."</h1> 
                    </div>
                </div>"; 
            echo "<div class='container'><div class='row'>";
            echo "<div class='col-sm-6'>";
            echo "<tr>";
            echo "<p><strong>". ucfirst($row['listing_category']) ."</strong></p>";
            echo "<p><strong>City:</strong>". ucfirst($row['listing_city']) ."</td>";
            echo "<p><strong>Contact:</strong>". ucfirst($row['listing_contact']) ."</td>";
            echo "<p><strong>Email:</strong>". ucfirst($row['listing_email']) ."</td></div></div></div>";

        }

    include "footer.php";
?>