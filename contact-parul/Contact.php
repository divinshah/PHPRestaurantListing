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
	public function getAllContacts($dbcon){


        $sql = "SELECT * FROM contact";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $contacts = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $contacts;
    }
}