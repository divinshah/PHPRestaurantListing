<?php

class offers
{
	public function getNames($db){
        $query = "SELECT * FROM offers";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getOffers($db, $offer){
        $query = "SELECT * FROM offers WHERE offerName= :offername";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':offername', $offername, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function getOfferById($id, $db){
        $sql = "SELECT * FROM offers where offerId = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
    public function getAllOffers($dbcon){


        $sql = "SELECT * FROM offers";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $offers = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $offers;
    }

    public function addOffer($offername, $offerdescrp,$offervalid,$offerprice, $db)
    {
        $sql = "INSERT INTO offers (offerName, offerDesc, offerValidity, offerPrice) 
              VALUES (:offername, :offerdescrp, :offervalid, :offerprice) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':offername', $offername);
        $pst->bindParam(':offerdescrp', $offerdescrp);
		$pst->bindParam(':offervalid', $offervalid);
		$pst->bindParam(':offerprice', $offerprice);
        

        $count = $pst->execute();
        return $count;
    }

    public function deleteOffer($id, $db){
        $sql = "DELETE FROM offers WHERE offerId = :id";

        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }

    public function updateOffer($id, $offername, $offerdescrp,$offervalid,$offerprice, $db){
        $sql = "Update offers
                set offerName = :offername,
                offerDesc = :offerdescrp,
				offerValidity = :offervalid,
				offerPrice = :offerprice
                WHERE offerId = :id";

        $pst =  $db->prepare($sql);

        $pst->bindParam(':offername', $offername);
        $pst->bindParam(':offerdescrp', $offerdescrp);
		$pst->bindParam(':offervalid', $offervalid);
		$pst->bindParam(':offerprice', $offerprice);
        $pst->bindParam(':id', $id);

        $count = $pst->execute();

        return $count;
    } 
}