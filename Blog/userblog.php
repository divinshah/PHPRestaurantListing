<?php
include "../headerfooter/header.php";
?>
<div class="jumbotron">
    <div class="container">
        <h1>BLOGS</h1>
    </div>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th hidden>Id</th>
                <th>Name</th>
                <th>Blog</th>
                <th>Date</th>
				<th>Time</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>

<?php
require_once '../model/Database.php';
require_once 'blog.php';

$dbcon = Database::getDb();
$s = new blog();
$myblog =  $s->getAllBlogs(Database::getDb());



foreach($myblog as $blog){
   echo "<tr>
   <td>   $blog->name  </td>
   <td>   $blog->blog  </td>
    <td>  $blog->date  </td>
	<td>  $blog->time  </td>
   </tr>";
   
}
?>
</tbody>
</table>
<?php
include "../headerfooter/footer.php";
?>