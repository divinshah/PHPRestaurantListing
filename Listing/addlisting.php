<?php
require_once 'database.php';
require_once 'listings.php';
require '../headerfooter/header.php';
//include 'form_process.php';

//Check validataion
$name_error = $city_error = $category_error = $contact_error = $email_error = "";
$name = $city = $category = $contact = $email = "";

//form submitted with post method

    if(isset($_POST['addList'])){
      if(empty($_POST["listingname"])){
        $name_error= "Name is required";
    }$listingname = $_POST['listingname'];
    if(!preg_match("/^[a-zA-Z]*$/",$listingname)){
        $name_error= "Only letter and white space allowed";
    }
       $listingname = $_POST['listingname'];
       $listingcity = $_POST['listingcity'];
       if(empty($listingcity)){
         $city_error="city is required";
       }
       $listingcategory = $_POST['listingcategory'];

       $listingcontact = $_POST['listingcontact'];
       if(empty($listingcontact)){
         $contact_error="Enter contact details";
       }
       if(!is_numeric($listingcontact)){
         $contact_error= "only numeric allowed";
       }
       
       $listingemail = $_POST['listingemail'];
       if(empty($listingemail)){
         $email_error= "Enter email";
       }if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error="Invalid email address";
    }
       
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
  <h1>Add Restaurant</h1> 
    </div>
</div>
<div class="container">
    <div class="row">
        <h3>Add your Restaurant</h3>
    </div>  
    
    <div class="row">
        <div class="col-lg-7">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            
              <div class="form-group">
                  
                  <label for="listingname">Restaurant Name*</label>
                  <input type="text" class="form-control" name="listingname" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                  <span class="error"><?php $name_error ?> </span>
                </div>

                <div class="form-group">
                  
                  <label for="listingcity">Restaurant City*</label>
                  <input type="text" class="form-control" name="listingcity" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                  <span class="error"><?php $city_error ?> </span>
                </div>

                <div class="form-group">
                  <label for="listingcategory">Category*</label>
                  <select name="listingcategory" class="form-control" required>
                      <option value="Mexican">Mexican</option>
                      <option value="Italian">Italian</option>
                      <option value="Indian">Indian</option>
                      <option value="Pizza">Pizzeria</option>
                      <option value="Cafeteria">Cafeteria</option>
                  </select>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                  <span class="error"><?php $category_error ?> </span>
              </div>


                <div class="form-group">
                  
                  <label for="listingcontact">Contact*</label>
                  <input type="text" class="form-control" name="listingcontact" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                  <span class="error"><?php $contact_error ?> </span>
                </div>

                <div class="form-group">
                  
                  <label for="listingemail">Email*</label>
                  <input type="email" class="form-control" name="listingemail" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                  <span class="error"><?php $email_error ?> </span>
                </div>
                <p>* All fields are required</p>
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


<?php require '../headerfooter/footer.php'; ?>
