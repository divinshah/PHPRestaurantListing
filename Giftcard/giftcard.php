<?php
class giftcard
{
	public function getName1($db){
        $query = "SELECT * FROM giftcards";
        $pdostm = $db->prepare($query);
        $pdostm->execute();
        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getMessagesFromEmail($db, $Email){
        $query = "SELECT * FROM giftcards WHERE Email= :Email";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':Email', $amount, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function getGiftcardById($Id, $db){
        $sql = "SELECT * FROM giftcards where id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $Id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
    public function getgiftcard($dbcon){
        $sql = "SELECT * FROM giftcards";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $Email = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $Email;
    }
    public function addgiftcard($amount, $email, $giftto, $giftfrom, $message, $db)
    {
        $sql = "INSERT INTO giftcard (amount, email, giftto, giftfrom, message) 
              VALUES (:amount, :email, :giftto, :giftfrom, :message) ";
        $pst = $db->prepare($sql);
		$pst->bindParam(':amount', $amount);
		$pst->bindParam(':email', $email);
        $pst->bindParam(':giftto', $giftto);
        $pst->bindParam(':giftfrom', $giftfrom);
		$pst->bindParam(':message', $message);
        
        $count = $pst->execute();
        return $count;
    }
    public function deletegiftcard($id, $db){
        $sql = "DELETE FROM giftcards WHERE id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $id);
        $count = $pst->execute();
        return $count;
    }
    public function updategiftcard($Id, $amount, $email, $giftto, $giftfrom, $message, $db){
        $sql = "Update giftcards
                set amount = :amount,
				email = :email,
				giftto = :giftto,
				giftfrom = :giftfrom,
                message = :message
                WHERE id = :id";
        $pst =  $db->prepare($sql);
		$pst->bindParam(':amount', $amount);
		$pst->bindParam(':email', $email);
        $pst->bindParam(':giftto', $giftto);
        $pst->bindParam(':giftfrom', $giftfrom);
		$pst->bindParam(':message', $message);
        $pst->bindParam(':id', $Id);
        $count = $pst->execute();
        return $count;
    } 
}