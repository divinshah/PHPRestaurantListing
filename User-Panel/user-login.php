<!--Php code-->
<?php
require_once 'header.php';
require_once 'Database.php';
require_once 'User.php';

$db = Database :: getDB();
$u = new User();


if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $login = $u -> checkLoginCredentails($email,$pwd, $db);
    
    foreach($login as $l)
    {
        $id = $l->id;
    }
    if($login)
    {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: user-detail.php?id=$id");
    }
    else 
    {
        echo "Invalid login credentials";
    }
}


?>

<div class="jumbotron">
    <div class="container">
        <h1>Login</h1>
    </div>
</div>
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label>Email ID :</label>
            <input name="email" class="form-control" placeholder="Enter your email" type="text">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input name="pwd" class="form-control" placeholder="Enter Password" type="password">
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
        <div class="form-group">
            Don't have an account? <a href="Add_User.php" class="ml-2">Sign Up</a>
        </div>
    </form>
</div>
<?php
require_once 'footer.php';
?>