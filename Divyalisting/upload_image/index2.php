<?php
    $msg ="";
    //if upload button clicked
    if( isset($_POST['upload'])){
        //path to store image
        $target = "images/" .basename($_FILES['image']['name']);

        //connnect to db
        $db = mysqli_connect("localhost","root","", "listingtest");

        //get all submitted data
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];

        $sql = "insert into images (image,text) values ('$image', '$text')";
        mysqli_query($db,$sql);// stores data to db table

        //move images to local folder
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "Image uploaded successfully";
        }else{
            $msg= "image not uploaded";
        }
    }


?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Upload Image</h2>
<?php
    $db

?>
<div id="content">		
<form method="POST" action="index2.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>

