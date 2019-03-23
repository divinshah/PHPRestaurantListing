<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!--Php code-->
<?php

require_once 'Database.php';
require_once 'User.php';

$db = Database :: getDB();
$u = new User();

if(isset($_POST['regiuser']))
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $mobile = $_POST['mobile'];
    $addr = $_POST['addr'];
    $pcode = $_POST['pcode'];    
    $myuser = $u -> addUser($fname,$email,$pwd,$cpwd,$mobile,$addr,$pcode);
}

?>


<div class="jumbotron">
    <div class="container">
        <h1>Create Account</h1>
    </div>
</div>
<div class="container">
    <h2>Get Started with free account</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>Full Name:</label>
            <input name="fname" class="form-control" placeholder="Full Name" type="text">
        </div>
        <div class="form-group">
            <label>Email Id:</label>
            <input name="email" class="form-control" placeholder="Email Id" type="text">
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input name="pwd" class="form-control" placeholder="Password" type="password">
        </div>
        <div class="form-group">
            <label>Confirm Password :</label>
            <input name="cpwd" class="form-control" placeholder="Confirm Password" type="password">
        </div>
        <div class="form-group">
            <label>Mobile Number :</label>
            <select class="form-control" style="max-width: 80px;">
                <option selected="">+1</option>
            </select>
            <input name="mobile" maxlength="10" class="form-control" placeholder="Mobile Number" type="text">
        </div>
        <div class="form-group">
            <label>Address :</label>
            <input name="addr" class="form-control" placeholder="Address" type="text">
        </div>
        <div class="form-group">
            <label>Postal Code :</label>
            <input name="pcode" class="form-control" placeholder="Postal Code" type="text">
        </div>
        <button type="submit" name="regiuser" class="btn btn-primary">Create Account</button>
    </form>
</div>

