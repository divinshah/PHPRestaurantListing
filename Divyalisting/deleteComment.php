<!DOCTYPE html>
<html>
<body>

<h2>Delete Comments</h2>

<table border=1 cellpadding=1 cellspacing=1>
    <tr>
        <th>Business title</th>
        <th>name</th>
        <th>Comment </th>
        
    </tr>
<?php
    $con = mysqli_connect('127.0.0.1','root','');
    //connect server
    if(!$con){
        echo "Not connected to server";
    }
    //select database
    if(!mysqli_select_db($con,'listingnew')){
        echo "db not selected";
    }

    //query
    $sql = "select * from comments inner join businesses on comments.listingid = businesses.id order by businesses.listing_name";

    //execute the query
    $records= mysqli_query($con,$sql);

    while($row= mysqli_fetch_array($records))
    {
        echo "<tr>";
        echo "<td>".$row['listing_name']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['comment']."</td>";
        echo "<td><a href= delete.php?id=" .$row['id'].">Delete</a></td>";
    }
    
    

?>
</table>

</body>
</html>