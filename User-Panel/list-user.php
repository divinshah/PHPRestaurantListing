<?php
require_once '../headerfooter/adminhome.php';
?>

<div class="card mb-3">
    <div class="container">
        <div class="card-header">
          <i class="fa fa-table"></i> List of User</div>
        <div class="card-body">
        <form action="" method="post">
        <div class="form-group">
            <label> Name :</label>
            <input name="fname" class="form-control" placeholder="Enter Name" type="text">
        </div>
        <!--<div class="form-group">
            <label> Email :</label>
            <input name="email" class="form-control" placeholder="Enter Email" type="text">
        </div>-->
        <div class="form-group">
            <button type="submit" name="search" class="btn btn-primary">Search</button>
        </div>
        </form>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th hidden>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Address</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../model/Database.php';
            require_once '../model/User.php';
            $db = Database :: getDB();
            $u = new User();
            
//            echo $_SESSION['email'];

            //$myuser = $u -> getAllUser($db);
            
            if(isset($_POST['search']))
            { 
                $name = $_POST['fname'];
                //$email = $_POST['email'];
                //if($name != null)
                //{
                  //  $myuser = $u -> searchUser($name,$email, $db); 
                    $myuser = $u -> searchUser($name, $db); 
                //}
                //else if($email != null)
                                    
            }
            else 
            {
                $_SESSION['email'];
                $myuser = $u -> getAllUser($db);  
            }
            
            foreach($myuser as $user)
            {
                echo "<tr>
                <td hidden>  $user->id  </td>
                <td> <a href='../Admin-Panel/user-detail.php?id=$user->id'>  $user->full_name </a> </td>
                <td>  $user->email_id  </td>
                <td>  $user->mobile_no  </td>
                <td>  $user->address  </td>
                <td> <a href='../Admin-Panel/edit-user.php?id=$user->id' name='edituser' class='btn btn-primary btn-block'> Edit </a> </td>
                
                <td> <a href='../Admin-Panel/delete-user.php?id=$user->id' name='deleteuser' class='btn btn-primary btn-block'> Delete </a> </td>
                </tr>
                ";   
            }

            ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php
require_once '../headerfooter/adminfooter.html';
?>
<!--<td> <button type='submit' name='regiuser' class='btn btn-primary btn-block'> Edit </button> </td>-->