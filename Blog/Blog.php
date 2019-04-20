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
	public function getAllBlogs($dbcon){


        $sql = "SELECT * FROM blogs";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $offers = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $offers;
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
        $Id = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $Id;
    }
    public function addblog($name, $date, $time, $blog, $db)
    {
        $sql = "INSERT INTO blogs (Name, date, time, blog) 
              VALUES (:name, :date, :time, :blog) ";
        $pst = $db->prepare($sql);
		$pst->bindParam(':name', $name);
		$pst->bindParam(':date', $date);
		$pst->bindParam(':time', $time);
		$pst->bindParam(':blog', $blog);
        
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
    public function updateblog($Id, $name, $date, $time, $blog, $db)
	{
        $sql = "Update blogs
                set name = :name,
				date = :date,
				time = :time,
				blog = :blog
                WHERE id = :id";
        $pst =  $db->prepare($sql);
		$pst->bindParam(':name', $name);
		$pst->bindParam(':date', $date);
		$pst->bindParam(':time', $time);
        $pst->bindParam(':blog', $blog);
        $pst->bindParam(':id', $Id);
        $count = $pst->execute();
        return $count;
    } 
}