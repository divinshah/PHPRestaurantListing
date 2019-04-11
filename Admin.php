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
}

?>