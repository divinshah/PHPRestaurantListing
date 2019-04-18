<?php
require_once 'adminhome.php';
?>
<div class="card mb-3">
        
    <div class="container">
        <div class="card-header">
          <i class="fa fa-table"></i> List of Admin</div>
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
                <th>Email Id</th>
                <th>Role</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once 'Database.php';
                require_once 'Admin.php';
                
                $db = Database :: getDb();
                $a = new Admin();
                
                $myadmin = $a->getAllAdminsWithRole($db);
                //var_dump($myadmin);
                foreach($myadmin as $admin)
                {
                    echo "<tr>
                    <td hidden>  $admin->id  </td>
                    <td> <a href='user-detail.php?id=$admin->id'>  $admin->name </a> </td>
                    <td>  $admin->emailid  </td>
                    <td>  $admin->role_name  </td>
                    <td> <a href='edit-admin.php?id=$admin->id' name='edituser' class='btn btn-primary btn-block'> Edit </a> </td>
                    <td> <a href='delete-admin.php?id=$admin->id' name='deleteuser' class='btn btn-primary btn-block'> Delete </a> </td>
                    </tr>";   
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>

<?php
require_once 'adminfooter.html';
?>
