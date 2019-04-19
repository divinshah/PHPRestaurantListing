<?php
class Contact
{
	public function addContact($email, $message, $db)
    {
        $sql = "INSERT INTO contact (email, message) 
              VALUES (:email, :message) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':email', $email);
        $pst->bindParam(':message', $message);
		
        

        $count = $pst->execute();
        return $count;
    }
	 public function getContactById($id, $db){
        $sql = "SELECT * FROM contact where id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
	public function deleteContact($id, $db){
        $sql = "DELETE FROM contact WHERE id = :id";

        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }

	public function getAllContacts($dbcon){


        $sql = "SELECT * FROM contact";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $contacts = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $contacts;
    }
}