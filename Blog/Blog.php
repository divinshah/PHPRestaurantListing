<?php
class blog
{
	public function getName($db){
        $query = "SELECT * FROM blogs";
        $pdostm = $db->prepare($query);
        $pdostm->execute();
        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function getBlogById($Id, $db){
        $sql = "SELECT * FROM blogs where id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $Id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
    public function getblog($dbcon){
        $sql = "SELECT * FROM blogs";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $Email = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $Email;
    }
    public function addblog($Name, $Password, $Blogg $db)
    {
        $sql = "INSERT INTO blogs (Name, Password, Blogg) 
              VALUES (:Name, :Password, :Blogg) ";
        $pst = $db->prepare($sql);
		$pst->bindParam(':Name', $Name);
		$pst->bindParam(':Password', $Password);
        $pst->bindParam(':Blogg', $Blogg);
        
        $count = $pst->execute();
        return $count;
    }
    public function deleteblog($id, $db){
        $sql = "DELETE FROM blogs WHERE id = :Id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':Id', $id);
        $count = $pst->execute();
        return $count;
    }
    public function updateblog($Id, $Name, $Password, $Blogg, $db)
	{
        $sql = "Update blogs
                set Name = :Name,
				Password = :Password,
				Blogg = :Blogg
                WHERE id = :id";
        $pst =  $db->prepare($sql);
		$pst->bindParam(':Name', $Name);
		$pst->bindParam(':Password', $Password);
        $pst->bindParam(':Blogg', $Blogg);
        $pst->bindParam(':id', $Id);
        $count = $pst->execute();
        return $count;
    } 
}