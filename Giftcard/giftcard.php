<?php
class giftcard
{
	public function getName1($db){
        $query = "SELECT * FROM giftcard";
        $pdostm = $db->prepare($query);
        $pdostm->execute();
        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getMessagesFromEmail($db, $Email){
        $query = "SELECT * FROM giftcard WHERE Email= :Email";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':Email', $Name1, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function getEmailById($Id, $db){
        $sql = "SELECT * FROM giftcard where id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $Id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
    public function getgiftcard($dbcon){
        $sql = "SELECT * FROM giftcard";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $Email = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $Email;
    }
    public function addgiftcard($Name1, $Name2, $Email, $Message, $db)
    {
        $sql = "INSERT INTO giftcard (Name1, Name2, Email, Message) 
              VALUES (:Name1, :Name2, :Email, :Message) ";
        $pst = $db->prepare($sql);
		$pst->bindParam(':Name1', $Name1);
		$pst->bindParam(':Name2', $Name2);
        $pst->bindParam(':Email', $Email);
        $pst->bindParam(':Message', $Message);
        
        $count = $pst->execute();
        return $count;
    }
    public function deletegiftcard($Id, $db){
        $sql = "DELETE FROM giftcard WHERE id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $id);
        $count = $pst->execute();
        return $count;
    }
    public function updategiftcard($Id, $Name1, $Name2, $Email, $Message, $db){
        $sql = "Update giftcard
                set Name1 = :Name1,
				Name2 = :Name2,
				Email = :Email,
                Message = :Message
                WHERE id = :Id";
        $pst =  $db->prepare($sql);
		$pst->bindParam(':Name1', $Name1);
		$pst->bindParam(':Name2', $Name2);
        $pst->bindParam(':Email', $Email);
        $pst->bindParam(':Message', $Message);
        $pst->bindParam(':Id', $Id);
        $count = $pst->execute();
        return $count;
    } 
}