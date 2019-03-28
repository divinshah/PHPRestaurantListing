<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<?php
require_once 'user_header.php';
require_once 'Database.php';
require_once 'User.php';

//session_start();
//echo $_SESSION['email'];

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $u = new User();
    $user = $u->getUserById($id,$dbcon);
}

if(isset($_POST['Edit']))
{
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $mobile = $_POST['mobile'];
    $addr = $_POST['addr'];
    $pcode = $_POST['pcode'];
    
    $count = $u -> updateUser($id,$fname,$email,$mobile,$addr,$pcode,$dbcon);

    if($count) {
        header("Location: list-user.php");
    } else {
        echo "problem updating";
    }
    
}
?>
<div class="jumbotron">
    <div class="container">
        <h1>Edit Profile</h1>
    </div>
</div>

<div class="container">
        <form action="" method="post">
            <div class="form-group">
                <input name="id" class="form-control" value="<?= $user->id; ?>" type="hidden" />
                <label>Full Name :</label>
                <input name="fname" class="form-control" placeholder="Full Name" value="<?= $user->full_name?>" />
            </div>
            <div class="form-group">
                <label>Email Id :</label>
                <input name="email" class="form-control" placeholder="Email Id" value="<?= $user->email_id; ?>" type="text" />
            </div>
            <div class="form-group">
                <label>Mobile No :</label>
                <select class="form-control" style="max-width: 80px;">
		            <option selected="">+1</option>
                </select>
                <input name="mobile" maxlength="10" class="form-control" placeholder="Mobile Number" value="<?= $user->mobile_no; ?>" type="text" />
            </div>
            <div class="form-group">
                <label>Address :</label>
                <input name="addr" class="form-control" placeholder="Address" value="<?= $user->address; ?>" type="text" />
            </div>
            <div class="form-group">
                <label>Postal Code :</label>
                <input name="pcode" class="form-control" placeholder="Postal Code" value="<?= $user->postal_code; ?>" type="text" />
            </div>
            <div class="form-group">
                <button type="submit" name="Edit" class="btn btn-primary"> Update </button>
            </div>
            
        </form>
</div>

<?php
require_once 'user_footer.php';
?>