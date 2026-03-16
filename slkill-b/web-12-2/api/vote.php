<?php include_once "db.php";

$option=$Que->find($_POST['id']);
$option['vote']++;
$Que->save($option);

$subject=$Que->find($option['main_id']);
$subject['vote']++;
$Que->save($subject);