<?php
require_once 'dbconfig.php';

// Get IDs
$image_id = filter_input(INPUT_POST, 'image_id', FILTER_VALIDATE_INT);

// Delete from the database
if ($image_id != false && $image_id != false) {
    $query = "DELETE FROM gallery
              WHERE id = :image_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':image_id', $image_id);
    $statement->execute();
    $statement->closeCursor();
}

// display page
include('index.php');
?>