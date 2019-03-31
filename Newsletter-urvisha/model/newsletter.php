<?php
require_once'database.php';

class Newsletter
{
	
	 //add newsletter
    public function addNewsletter($topic,$title,$message)
    {
        
            $sql = "Insert into newsletter (topic, title, message)
                values (:topic, :title, :message)";
        
            $db = Database::getDB();
            $pst =$db->prepare($sql);
            
            $pst->bindParam(':topic', $topic);
			$pst->bindParam(':title',$title);
			$pst->bindParam(':message',$message);
           
            
            //echo "Data Added Successfully";
            $count = $pst->execute();
            return $count;      
        
        
    }
	
	  public function getTopic($db){
        $query = "SELECT DISTINCT topic FROM newsletter";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

	 public function getNewsletter($db, $topic){
        $query = "SELECT * FROM newsletter WHERE topic = :topic";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':topic', $topic, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }

	  //List of all newsletter by id to get detail
    public function getNewsById($id,$db)
    {
        $sql = "select * from newsletter where newsletterid = :id ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':id', $id);
        //exceuting
        $pst->execute();
        $news = $pst->fetch(PDO::FETCH_OBJ);
        return $news;

    }
	
	   //update newsletter detail
    public function updateNewsletter($id,$topic,$title,$message,$db)
    {
        $sql = "update newsletter set
		topic = :topic,
		title = :title,
		message = :message
		where newsletterid =:id";
        
        $pst =$db->prepare($sql);
        
			$pst->bindParam(':id', $id);
			$pst->bindParam(':topic', $topic);
			$pst->bindParam(':title', $title);
			$pst->bindParam(':message',$message);
           
       
        $nws = $pst->execute();
        return $nws;      
    }
	
	 public function getAllNewsletter($db)
    {
        $sql = 'select * from newsletter';
        $pdostm = $db ->prepare($sql);
        $pdostm->execute();
        $nwsltr = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $nwsltr;
    }
	
	 public function deleteNewsletter($id,$db)
    {
        $sql ="delete from newsletter where newsletterid =:id";
        $pst = $db->prepare($sql);
        
        $pst->bindParam(':id',$id);
        $count = $pst->execute();
        echo $count;
        return $count;
    }
}
?>


