<?php
require_once'database.php';

class Event
{
	
	  public function geteventName($db){
        $query = "SELECT DISTINCT eventName FROM events";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

	 public function getEvent($db, $name){
        $query = "SELECT * FROM events WHERE eventName = :name";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':name', $name, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }





    //add user
    public function addEvent($name,$description,$location,$date,$time,$fee)
    {
        
            $sql = "Insert into events (eventName, eventDescription, eventLocation, eventdate, eventTime, eventFee)
                values (:name,:description, :location, :date, :time, :fee)";
        
            $db = Database::getDB();
            $pst =$db->prepare($sql);
            
            $pst->bindParam(':name', $name);
            $pst->bindParam(':description', $description);
			$pst->bindParam(':location',$location);
			$pst->bindParam(':date',$date);
            $pst->bindParam(':time',$time);
			$pst->bindParam(':fee',$fee);
            
            echo "Data Added Successfully";
            $count = $pst->execute();
            return $count;      
        
        
    }
    //List of all user
    public function getAllEvents($db)
    {
        $sql = 'select * from events';
        $pdostm = $db ->prepare($sql);
        $pdostm->execute();
        $events = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $events;
    }
    //List of all user by id to get detail
    public function getEventsById($id,$db)
    {
        $sql = "select * from events where eventId = :id ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':id', $id);
        //exceuting
        $pst->execute();
        $eve = $pst->fetch(PDO::FETCH_OBJ);
        return $eve;

    }
    //update user detail
    public function updateEvent($id,$name,$description,$location,$date,$time,$fee,$db)
    {
        $sql = "update events set
        eventName = :name,
        eventDescription = :description,
        eventLocation = :location,
		eventdate = :date,
		eventTime = :time,
		eventFee = :fee
		where eventId =:id";
        
        $pst =$db->prepare($sql);
        
			$pst->bindParam(':id', $id);
			$pst->bindParam(':name', $name);
            $pst->bindParam(':description', $description);
			$pst->bindParam(':location',$location);
			$pst->bindParam(':date',$date);
            $pst->bindParam(':time',$time);
			$pst->bindParam(':fee',$fee);
            
        
       
        $count = $pst->execute();
        return $count;      
    }


    public function deleteEvent($id,$db)
    {
        $sql ="delete from events where eventId =:id";
        $pst = $db->prepare($sql);
        
        $pst->bindParam(':id',$id);
        $count = $pst->execute();
        echo $count;
        return $count;
    }

	
	
}
?>