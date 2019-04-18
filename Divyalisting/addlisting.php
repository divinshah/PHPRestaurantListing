<?php
require_once 'database.php';
require_once 'listings.php';
require 'inc/header.php';

    if(isset($_POST['addList'])){
       $listingname = $_POST['listingname'];
       $listingcity = $_POST['listingcity'];
       $listingcategory = $_POST['listingcategory'];
       $listingcontact = $_POST['listingcontact'];
       $listingemail = $_POST['listingemail'];
       
       $db = Database::getDb();
       $s = new Listing();
       $c = $s->addListing($listingname, $listingcity, $listingcategory, $listingcontact, $listingemail, $db);

        if($c){
            header("Location: viewlistings.php");
        } else {
           echo "Error occured";
        }

    }
?>
<div class="jumbotron">
<div class="containerH">
  <h1>Listing</h1> 
    </div>
</div>
<div class="container">
    <div class="row">
        <h3>Add listing</h3>
    </div>  
    
    <div class="row">
        <div class="col-lg-7">
            <form action="" method="post">
            
<div class="form-group">
    
    <label for="listingname">Listing Name:</label>
    <input type="text" class="form-control" name="listingname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    
    <label for="listingcity">Listing City:</label>
    <input type="text" class="form-control" name="listingcity" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    <label for="listingcategory">Category</label>
    <select name="listingcategory" class="form-control" required>
        <option value="Mexican">Mexican</option>
        <option value="Italian">Italian</option>
        <option value="Indian">Indian</option>
        <option value="Pizza">Pizzeria</option>
        <option value="Cafeteria">Cafeteria</option>
    </select>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>


  <div class="form-group">
    
    <label for="listingcontact">Contact:</label>
    <input type="text" class="form-control" name="listingcontact" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="form-group">
    
    <label for="listingemail">Email:</label>
    <input type="email" class="form-control" name="listingemail" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="addList" class="btn btn-primary">Create</button>
                        <a class="btn" href="viewlistings.php">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>   



<?php require 'inc/footer.php'; ?>
