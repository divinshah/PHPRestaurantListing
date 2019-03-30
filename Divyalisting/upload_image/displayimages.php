<div class="jumbotron">
<div class="containerH">
  <h1>Gallery</h1> 
    </div>
</div>
<?php include "header.php"; ?>
<div class= "container">
    <div class="row">
<?php
    
    
    $db = mysqli_connect("localhost","root","", "listingtest");
    $sql = "select * from images";
    $result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_array($result)){
        echo "<div class='col-md-4 col-xs-6'>";
            echo "<img src='images/".$row['image']."' class='img-responsive img-thumbnail' >";
            echo "<div class='caption'>";
            echo "<p>" .$row['text'] . "<p>";
            echo "</div>";
        echo "</div>";
    }
    
?>
</div>
</div>
<?php include "footer.php"; ?>

</div>