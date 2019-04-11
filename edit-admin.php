<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<?php
require_once 'Database.php';
require_once 'Admin.php';

$dbcon = Database::getDb();
$myrole = new Admin();
$role = $myrole->getAllRoles($dbcon);

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $u = new Admin();
    $admin = $u->getAdminById($id,$dbcon);
}


?>

<div class="jumbotron">
    <div class="container">
        <h1>Admin Registration</h1>
    </div>
</div>
<div class="container">
    <!--<h2>Get Started with free account</h2>-->
    <form action="" method="post">
        <div class="form-group">
            <input name="id" class="form-control" value="<?= $admin->id; ?>" type="hidden" />
            <label>User Name:</label>
            <input name="uname" class="form-control" placeholder="User Name" value="<?= $admin->name; ?>" type="text">
        </div>
        <div class="form-group">
            <label>Email Id:</label>
            <input name="email" class="form-control" placeholder="Email Id" value="<?= $admin->emailid; ?>" type="text">
        </div>
        <div class="form-group">
            <label>Role :</label>
            <?php
                echo "<select class='form-control' name=role value=''> Role </option>";
                foreach($role as $r) 
                {
                    echo "<option value=$r->id name=rolevalue>$r->role_name</option>";
                }
                echo "</select>";
            ?>
        </div>
        <div class="form-group">
            <label>Password :</label>
            <input name="pwd" class="form-control" placeholder="Password" value="<?= $admin->password; ?>" type="password">
        </div>
        <div class="form-group">
        <button type="submit" name="regiuser" class="btn btn-primary">Create Account</button>
        </div>
    </form>
</div>

