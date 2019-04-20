<?php
require_once 'Database.php';
require_once 'listings.php';


$dbcon = Database::getDb();
$b = new Listing();
$mylisting =  $b->getAllListing(Database::getDb());

require '../headerfooter/header.php';
?>

<div class="jumbotron">
    <div class="containerH">
      <h1>Businesses</h1> 
        </div>
    </div>
<div class="container">
    

    <div class="row">
                <?php
                    if(sizeof($mylisting) > 0) {
                        foreach($mylisting as $listing){
                            echo '<div class="col-md-4 col-xs-6">
                                    
                                    <div class="border"><h3><a href="getListing.php?id='.$listing->ID.'">'.$listing->listing_name.'</a></h3>
                                    <p>'.$listing->listing_category.'</p>
                                    <a href="updateListing.php?id='.$listing->ID.'">EDIT</a>
                                    <a  onclick="javascript:confirmationDelete($(this));return false;" 
                                        href="deleteListing.php?id='.$listing->ID.'"
                                        class="text-dark ml-4">DELETE</a> 
                                  </div></div>';
                        }
                    } 
                    else {
                       echo '<div class="alert alert-info d-flex justify-content-center">
                                <strong>Sorry !</strong> No Result Found
                            </div>';
                    }
                ?>
                
    </div>
    <div class="row">
    <a href="addlisting.php" class="btn btn-success float-right">Add listing</a>
    </div>
    
   
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    function confirmationDelete(anchor) {
       var conf = confirm('Are you sure want to delete?');
       if(conf)
          window.location=anchor.attr("href");
    }
</script>




<?php require '../headerfooter/footer.php'; ?>
