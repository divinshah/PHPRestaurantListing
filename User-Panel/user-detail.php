<?php
require_once 'user_header.php';
?>

<?php
require_once 'Database.php';
require_once 'User.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    
    $u = new User();
    $user = $u->getUserById($id,$dbcon);
    $_SESSION['email'];
}
if(isset($_POST['Edit']))
{
    header("Location: edit-user.php?id=$id");
}
?>
<div class="jumbotron">
    <div class="container">
        <h1>My Profile</h1>
    </div>
</div>
<div class="container">    
        <form action="" method="post">
            <div class="form-group">
                <input name="id" class="form-control" value="<?= $user->id; ?>" type="hidden" />
                <label>Full Name :</label>
                <input name="fname" class="form-control" placeholder="Full Name" value="<?= $user->full_name?>" readonly="true" />
            </div>
            <div class="form-group">
                <label>Email Id :</label>
                <input name="email" class="form-control" placeholder="Email Id" value="<?= $user->email_id; ?>" type="text" readonly="true"/>
            </div>
            <div class="form-group">
                <label>Mobile No :</label>
                <select class="form-control" style="max-width: 80px;">
		            <option selected="">+1</option>
                </select>
                <input name="mobile" maxlength="10" class="form-control" placeholder="Mobile Number" value="<?= $user->mobile_no; ?>" type="text" readonly="true" />
            </div>
            <div class="form-group">
                <label>Address :</label>
                <input name="addr" class="form-control" placeholder="Address" value="<?= $user->address; ?>" type="text" readonly="true"/>
            </div>
            <div class="form-group">
                <label>Postal Code:</label>
                <input name="pcode" class="form-control" placeholder="Postal Code" value="<?= $user->postal_code; ?>" type="text" readonly="true"/>
            </div>
            <div class="form-group">
                <button type="submit" name="Edit" class="btn btn-primary"> Edit </button>
            </div>
        </form>
</div>


<?php
require_once 'user_footer.php'
?>