<?php

require_once'./model/database.php';
require_once'./model/newsletter.php';

	
	$db = Database::getDb();
	$n = new Newsletter();
	$nwltr = $n->getTopic($db);
	$nws;
	 if(isset($_POST['drppro'])){
		$topic = $_POST['topic'];
		$nws = $n->getNewsletter($db, $topic);
	
	} 

?>

<h1>Events List </h1>

<form action="list_newsletter.php" method="post">
    <select name="topic">
        <?php foreach ($nwltr as $n){
            echo "<option value='$n->topic'>" . $n->topic . "</option>";
        }?>
    </select>
    <input type="submit" name="drppro" value="Get newsmessage" />
</form>

<div>
    <?php
    if(isset($nws)){
        foreach ($nws as $n) {
            echo "<li>" ."Title:". $n ->title . "</li>"."</br>"."<li>"."Message:". 
			$n->message . "</li>";
        }
    }?>
</div>
