<?php
require_once 'Database.php';
require_once 'listings.php';
require 'inc/header.php';


    $ID = null;
    
    if (!empty($_GET['id'])) {
        $ID = $_REQUEST['id'];
        $dbcon = Database::getDb();
        $l = new Listing();
        $listing = $l->getListingById($ID, $dbcon);
    }
    
    if(isset($_POST['updateListing'])){
        $listingname = $_POST['listingname'];
        $listingcity = $_POST['listingcity'];
        $listingcategory = $_POST['listingcategory'];
        $listingcontact = $_POST['listingcontact'];
        $listingemail = $_POST['listingemail'];

       
        $dbcon = Database::getDb();
        $l = new Listing();
        $c = $l->updateListing($ID, $listingname, $listingcity, $listingcategory, $listingcontact, $listingemail, $dbcon);
        if($c){
            header("Location: viewlistings.php");
        } else {
            echo  "problem updating";
        }
    }
?>
<div class="jumbotron">
<div class="containerH">
  <h1>Edit Restaurant</h1> 
    </div>
</div>
<div class="container">
    <div class="row">
        <h3>Update Restaurant</h3>
    </div>  
    
    <div class="row">
        <div class="col-lg-7">
            <form action="" method="post" class="needs-validation">
                <div class="form-group">
                    <label for="listingname">Business Name</label>
                    <input class="form-control" name="listingname" type="text" placeholder="Enter Name" value="<?php echo $listing->listing_name ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="listingcity">City</label>
                    <input class="form-control" name="listingcity" type="text" placeholder="Enter city" value="<?php echo $listing->listing_city ?>" required>
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
                </div>

                <div class="form-group">
                    <label for="listingcontact">Contact</label>
                    <input name="listingcontact" class="form-control" placeholder="Enter contact" value="<?php echo $listing->listing_contact ?>"/>
                </div>
                <div class="form-group">
                    <label for="listingemail">Email</label>
                    <input name="listingemail" class="form-control" placeholder="Enter email" value="<?php echo $listing->listing_email ?>" />
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="updateListing" class="btn btn-success">Update</button>
                        <a class="btn btn-primary" href="viewlistings.php">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>  

<?php require 'inc/footer.php'; ?>
