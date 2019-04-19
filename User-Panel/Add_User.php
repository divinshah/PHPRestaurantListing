<!--Php code-->
<?php
require_once '../headerfooter/header.php';
require_once '../model/Database.php';
require_once '../model/User.php';

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
    header("Location: user-login.php");    
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
            <input name="fname" class="form-control" placeholder="Full Name" type="text" required>
        </div>
        <div class="form-group">
            <label>Email Id:</label>
            <input name="email" class="form-control" placeholder="Email Id" type="text" required>
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input name="pwd" class="form-control" placeholder="Password" type="password" required>
        </div>
        <div class="form-group">
            <label>Confirm Password :</label>
            <input name="cpwd" class="form-control" placeholder="Confirm Password" type="password" required>
        </div>
        <div class="form-group">
            <label>Mobile Number :</label>
            <select class="form-control" style="max-width: 80px;">
                <option selected="">+1</option>
            </select>
            <input name="mobile" maxlength="10" class="form-control" placeholder="Mobile Number" type="text" required>
        </div>
        <div class="form-group">
            <label>Address :</label>
            <input name="addr" class="form-control" placeholder="Address" type="text" required>
        </div>
        <div class="form-group">
            <label>Postal Code :</label>
            <input name="pcode" class="form-control" placeholder="Postal Code" type="text" required>
        </div>
        <div class="form-group">
            <button type="submit" name="regiuser" class="btn btn-primary">Create Account</button>
        </div>
        <div class="form-group">
            Already have an account? <a href="user-login.php" class="ml-2">Sign In</a> Here...
        </div>
    </form>
</div>

<?php
require_once '../headerfooter/footer.php';
?>