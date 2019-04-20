<?php
require_once '../headerfooter/adminhome.php';
require_once '../model/Database.php';
require_once '../model/Admin.php';

$dbcon = Database::getDb();
$myrole = new Admin();
$role = $myrole->getAllRoles($dbcon);

if(isset($_POST['regiuser']))
{
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $roles = $myrole->addAdmin($uname,$email,$role,$pwd,$cpwd);
}
?>


<div class="container">
    <div class="card-header">
          <i class="fa fa-table"></i> Add New Admin</div>
        <div class="card-body">
    <!--<h2>Get Started with free account</h2>-->
    <form action="" method="post">
        <div class="form-group">
            <label>User Name:</label>
            <input name="uname" class="form-control" placeholder="User Name" type="text" required>
        </div>
        <div class="form-group">
            <label>Email Id:</label>
            <input name="email" class="form-control" placeholder="Email Id" type="text" required>
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
            <input name="pwd" class="form-control" placeholder="Password" type="password" required>
        </div>
        <div class="form-group">
            <label>Confirm Password :</label>
            <input name="cpwd" class="form-control" placeholder="Confirm Password" type="password" required>
        </div>
        <div class="form-group">
        <button type="submit" name="regiuser" class="btn btn-primary">Create Account</button>
        </div>
    </form>
</div>

<?php
require_once '../headerfooter/adminfooter.html';
?>