<?php include_once "db.php";

$post=$Post->find($_GET['id']);
echo nl2br($post['text']);