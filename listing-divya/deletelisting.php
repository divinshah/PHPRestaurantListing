<!DOCTYPE html>
<html>
<body>

<h2>Delete Business </h2>
<table border=1 cellpadding=1 cellspacing=1>
    <tr>
        <th>Business title</th>
        <th>City</th>
        <th>Category </th>
        <th>Delete</th>
    </tr>

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

    while($row= mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['LISTING_NAME']."</td>";
        echo "<td>".$row['LISTING_CITY']."</td>";
        echo "<td>".$row['LISTING_CATEGORY']."</td>";
        echo "<td><a href= delete.php?id=" .$row['ID'].">Delete</a></td>";
    }
    
    

?>
</table>

</body>
</html>