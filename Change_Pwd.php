<!--Php code-->
<?php
require_once 'user_header.php';
require_once 'Database.php';
require_once 'User.php';

$db = Database :: getDB();
$u = new User();

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    
    $u = new User();
    $user = $u->getUserById($id,$dbcon);
    $_SESSION['email'];
}

if(isset($_POST['savepwd']))
{
    $oldpwd = $_POST['oldpwd'];
    $newpwd = $_POST['newpwd'];
    $pwd = $_POST['pwd'];
    $count = $u -> checkPwd($oldpwd,$id,$db);
    if($count > 0)
    {
        if($newpwd != $pwd)
        {
            echo "Password and confirm password must be same";
        }
        else
        {
            $pass = $u -> updatePwd($newpwd,$id,$db);
        }
        
    }
    else
    {
       // echo $mypwd;
        echo "Invalid old password";
    }
}


?>

<div class="jumbotron">
    <div class="container">
        <h1>Change Password</h1>
    </div>
</div>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Old Password:</label>
            <input name="oldpwd" class="form-control" placeholder="Enter your old Password" type="password">
        </div>
        <div class="form-group">
            <label>New Password:</label>
            <input name="newpwd" class="form-control" placeholder="Enter new Password you want to create" type="password">
        </div>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input name="pwd" class="form-control" placeholder="Re-type your new Password" type="password">
        </div>
        <div class="form-group">
            <button type="submit" name="savepwd" class="btn btn-primary">Save Password</button>
        </div>
    </form>
</div>

<?php
require_once 'user_footer.php';
?>