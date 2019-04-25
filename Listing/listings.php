<?php
class Listing
{
    public function getListingById($id, $db){
        $sql = "SELECT * FROM businesses WHERE ID = :id ";     
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        $Listings =  $pst->fetch(PDO::FETCH_OBJ);
        return $Listings;
    }
    public function getAllListing($dbcon){

        $sql = "SELECT * FROM businesses";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $newListing = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $newListing;
    }	
	public function addListing($listingname, $listingcity, $listingcategory, $listingcontact, $listingemail, $db)
    {
        $sql = "INSERT INTO businesses (listing_name, listing_city, listing_category, listing_contact, listing_email) 
              VALUES (:listingname, :listingcity, :listingcategory, :listingcontact, :listingemail) ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':listingname', $listingname);
        $pst->bindParam(':listingcity', $listingcity);
        $pst->bindParam(':listingcategory', $listingcategory);
        $pst->bindParam(':listingcontact', $listingcontact);
        $pst->bindParam(':listingemail', $listingemail);

        $count = $pst->execute();
        return $count;
    }
	
	  public function updatelisting($id, $listingname, $listingcity, $listingcategory, $listingcontact, $listingemail, $db)
	  {
        $q = $db->prepare('UPDATE businesses
                SET listing_name = ?,
                listing_city = ?,
                listing_category = ?,
                listing_contact = ?,
                listing_email = ?
                WHERE ID = ?');
        $count = $q->execute(array($listingname, $listingcity, $listingcategory, $listingcontact, $listingemail, $id));

        return $count;
    }
	 public function deleteListing($id, $db){
        $sql = "DELETE FROM businesses WHERE ID = ?";
        $pst = $db->prepare($sql);
        $pst->execute(array($id));
        $count = $pst->execute();
        return $count;
    }

    public function deleteComment($id, $db){
        $sql = "DELETE FROM comments WHERE id = ?";
        $pst = $db->prepare($sql);
        $pst->execute(array($id));
        $count = $pst->execute();
        return $count;
    }
	
	
	
}
?>