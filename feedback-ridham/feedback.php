<?php
class feedback
{
	public function getEmail($db){
        $query = "SELECT * FROM feedback";
        $pdostm = $db->prepare($query);
        $pdostm->execute();
        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getMessagesFromEmail($db, $Email){
        $query = "SELECT * FROM feedback WHERE Email= :Email";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':Email', $Email, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function getEmailById($Id, $db){
        $sql = "SELECT * FROM feedback where Id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $Id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
    public function getFEEDBACK($dbcon){
        $sql = "SELECT * FROM feedback";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $Email = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $Email;
    }
    public function addfeedback($Email, $Message, $db)
    {
        $sql = "INSERT INTO feedback (Email, Message) 
              VALUES (:Email, :Message) ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Email', $Email);
        $pst->bindParam(':Message', $Message);
        $count = $pst->execute();
        return $count;
    }
    public function deletefeedback($id, $db){
        $sql = "DELETE FROM feedback WHERE id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $id);
        $count = $pst->execute();
        return $count;
    }
    public function updatefeedback($Id, $Email, $Message, $db){
        $sql = "Update feedback
                set Email = :Email,
                Message = :Message
                WHERE id = :id";
        $pst =  $db->prepare($sql);
        $pst->bindParam(':Email', $Email);
        $pst->bindParam(':Message', $Message);
        $pst->bindParam(':id', $Id);
        $count = $pst->execute();
        return $count;
    } 
}