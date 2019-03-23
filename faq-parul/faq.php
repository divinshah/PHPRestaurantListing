<?php

class faq
{
	public function getQuestions($db){
        $query = "SELECT * FROM faq";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getAnswersFromQuestions($db, $question){
        $query = "SELECT * FROM faq WHERE question= :question";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':question', $question, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function getFaqById($id, $db){
        $sql = "SELECT * FROM faq where faqId = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        return $pst->fetch(PDO::FETCH_OBJ);
    }
    public function getAllFaq($dbcon){


        $sql = "SELECT * FROM faq";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $questions = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $questions;
    }

    public function addfaq($question, $answer, $db)
    {
        $sql = "INSERT INTO faq (question, answers) 
              VALUES (:question, :answer) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':question', $question);
        $pst->bindParam(':answer', $answer);
        

        $count = $pst->execute();
        return $count;
    }

    public function deleteFaq($id, $db){
        $sql = "DELETE FROM faq WHERE faqId = :id";

        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

    }

    public function updateFaq($id, $question, $answer, $db){
        $sql = "Update faq
                set question = :question,
                answers = :answer
                WHERE faqId = :id";

        $pst =  $db->prepare($sql);

        $pst->bindParam(':question', $question);
        $pst->bindParam(':answer', $answer);
        $pst->bindParam(':id', $id);

        $count = $pst->execute();

        return $count;
    } 
}