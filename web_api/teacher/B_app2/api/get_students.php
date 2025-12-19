<?php
include_once "DB.php";

$sql="select * from `students` where `classroom`='{$_GET['class_code']}' ";
$rows=$Student->all(['classroom'=>$_GET['class_code']]);

echo json_encode($rows,JSON_UNESCAPED_UNICODE);