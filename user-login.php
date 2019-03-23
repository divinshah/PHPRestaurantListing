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
            <input name="pwd" class="form-control" placeholder="Enter Password" type="text">
        </div>
        <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>