<?php
require 'inc/header.php';
require 'database.php';
   session_start(); /* Starts the session */
   /* Check Login form submitted */
   if(isset($_POST['Submit'])){
   /* Define username and associated password array */

   //$logins = array('divya' => '123456','username1' => 'password1','username2' => 'password2');
   
   /* Check and assign submitted Username and Password to new variable */
   $Username = $_POST['Username'];
   $Password = $_POST['Password'];

   if(empty($Username) || empty($Password)){
     echo "ERROR login";
   }
   else{
     $sql = "SELECT * FROM admin_details where name=?";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)){
       echo "ERRORS";
       exit();
     }
     else{
       mysqli_stmt_bind_param($stmt,"ss", $Username, $Password);
       mysqli_stmt_execute($stmt);
       $result =mysqli_stmt_get_result($stmt);
       if($row = mysqli_fetch_assoc()){
          $pwdCheck = password_verify($Password, $row['password']);
          if($pwdCheck == false){
            echo "Error";
            exit();
          }
          else if($pwdCheck == true){
            session_start();
            $_SESSION[] = $row['name'];
            header("Location: deleteComment.php");
            exit();
          }
       }
       else{
         echo "No user found";
         exit();
       }
     }
   }
   
   
?>

      

<div class="jumbotron">
<div class="containerH">
  <h1>Login Page</h1> 
    </div>
</div>
	
    <div align = "center">
         
            
				
    <div style = "margin:30px">
               
    <form action="" method="post" name="Login_Form">
    <table " border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <?php if(isset($msg)){?>
        <tr>
        <td colspan="3" align="center" valign="top"><?php echo $msg;?></td>
        </tr>
        <?php } ?>
        
        <tr>
        <td align="right" valign="top">Username</td>
        <td><input name="Username" type="text" class="Input"></td>
        </tr>
        <tr>
        <td align="right">Password</td>
        <td><input name="Password" type="password" class="Input"></td>
        </tr>
        <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
        </tr>
    </table>
    </form>
               
               
					
        </div>
				
        
			
      </div>
      <!--    Footer   -->
      <?php require 'inc/footer.php'; ?>