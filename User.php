<?php

class User 
{
    //add user
    public function addUser($fname,$email,$pwd,$cpwd,$mobile,$addr,$pcode)
    {
        //check if password and confirm password are same
        if($pwd != $cpwd)
        {
            echo "Password and confirm password must be same";
        }
        else 
        {
            $sql = "Insert into registration (full_name, email_id,password,mobile_no,address,postal_code,regi_date, is_visible)
                values (:fname,:email,:pwd,:mobile,:addr,:pcode,CURTIME(),1)";
        
            $db = Database::getDB();
            $pst =$db->prepare($sql);
            
            $pst->bindParam(':fname', $fname);
            $pst->bindParam(':email', $email);
            $pst->bindParam(':pwd', $pwd);
            $pst->bindParam(':mobile', $mobile);
            $pst->bindParam(':addr', $addr);
            $pst->bindParam(':pcode', $pcode);
            
            echo "Data Added Successfully";
            $count = $pst->execute();
            return $count;      
        }
        
    }
    //List of all user
    public function getAllUser($db)
    {
        $sql = 'select * from registration where is_visible = 1';
        $pdostm = $db ->prepare($sql);

        //exceuting
        $pdostm->execute();
        $students = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $students;
    }
    //List of all user by id to get detail
    public function getUserById($id,$db)
    {
        $sql = "select * from registration where id=:id and is_visible = 1";
        $pst = $db->prepare($sql);

        $pst->bindParam(':id', $id);
        //exceuting
        $pst->execute();
        $student = $pst->fetch(PDO::FETCH_OBJ);
        return $student;

    }
    //update user detail
    public function updateUser($id,$fname,$email,$mobile,$addr,$pcode,$db)
    {
        $sql = "update registration set
        full_name = :fname,
        email_id = :email,
        mobile_no = :mobile,
        address = :addr,
        postal_code = :pcode
        where id =:id";
        
        $db = Database::getDB();
        $pst =$db->prepare($sql);
        
        $pst->bindParam(':id', $id);
        $pst->bindParam(':fname', $fname);
        $pst->bindParam(':email', $email);
        $pst->bindParam(':mobile', $mobile);
        $pst->bindParam(':addr', $addr);
        $pst->bindParam(':pcode', $pcode);
        
        echo "Data Edited Successfully";
        $count = $pst->execute();
        return $count;      
    }
    public function deleteUser($id,$db)
    {
        $sql ="update registration set is_visible = 0 where id =:id";
        $pst = $db->prepare($sql);
        
        $pst->bindParam(':id',$id);
        $count = $pst->execute();
        echo $count;
        return $count;
    }
}
?>