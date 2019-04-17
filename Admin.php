<?php

class Admin
{
    //Get ALl Roles
    public function getAllRoles($db)
    {
        $sql = 'select * from roles';
        $pdostm = $db ->prepare($sql);

        //exceuting
        $pdostm->execute();
        $students = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $students;   
    }
    //add Admin
    public function addAdmin($uname,$email,$role,$pwd,$cpwd)
    {
        //check if password and confirm password are same
        if($pwd != $cpwd)
        {
            echo "Password and confirm password must be same";
        }
        else 
        {
            $sql = "Insert into admin_details (name,emailid,role,password)
                values (:uname,:email,:role,:pwd)";
        
            $db = Database::getDB();
            $pst =$db->prepare($sql);
            
            $pst->bindParam(':uname', $uname);
            $pst->bindParam(':email', $email);
            $pst->bindParam(':role', $role);
            $pst->bindParam(':pwd', $pwd);
            
            echo "Data Added Successfully";
            $count = $pst->execute();
            return $count;      
        }
        
    }
    //Get admin details by ID
    public function getAdminById($id,$db)
    {
        $sql = "select * from admin_details where id=:id";
        $pst = $db->prepare($sql);

        $pst->bindParam(':id', $id);
        //exceuting
        $pst->execute();
        $student = $pst->fetch(PDO::FETCH_OBJ);
        return $student;
    }
    //Get all admins with roles
    public function getAllAdminsWithRole($db)
    {
        $sql = "select a.id, a.name,a.emailid,r.role_name,a.password from admin_details a inner join roles r on a.role = r.id";
        $pdostm = $db ->prepare($sql);

        //exceuting
        $pdostm->execute();
        $students = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $students;
    }
    //update admin details
    public function updateAdmin($id,$uname,$email,$role,$db)
    {
        $sql = "update admin_details
            set name = :uname,
            emailid = :email,
            role = :role
            where id = :id";
        
        $pst = $db->prepare($sql);
        
        $pst->bindParam(':id',$id);
        $pst->bindParam(':uname',$uname);
        $pst->bindParam(':email',$email);
        $pst->bindParam(':role',$role);
        
        echo "Data Edited Successfully";
        $count = $pst->execute();
        return $count;      
        
    }
    //delete admin data
    public function deleteAdmin($id,$dbcon)
    {
        $sql = "delete from admin_details where id = :id";
        
        $pst = $dbcon->prepare($sql);
        $pst->bindParam(':id',$id);
        $count = $pst->execute();
        return $count;
    }
    //Check Login Credentials
    public function checkLoginCredentails($email,$pwd, $db)
    {
        $sql = 'select * from admin_details where emailid = :email and password = :pwd';
        
        $pst = $db -> prepare($sql);
        $pst->bindParam(':email',$email);
        $pst->bindParam(':pwd',$pwd);
        $pst->execute();
        $students = $pst->fetchAll(PDO::FETCH_OBJ);
        return $students;
        
        
    }
}

?>