<?php 
include_once "db.php";

$Movie->del($_GET['id']);
to("../admin.php?do=movie");