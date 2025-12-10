<?php
$dsn = "mysql:host=localhost;dbname=company;charset=utf8";
$pdo = new PDO($dsn,"root","");

$sql = "INSERT INTO `users` (`";

$keys = array_keys($_POST);
$key_sql = join("`,`", $keys) . "`)";
$values = "VALUES('" . join("','", $_POST) . "')";

$sql .= $key_sql . $values ;
echo $sql;
$row = $pdo -> query($sql) -> fetchALL(PDO::FETCH_ASSOC);
header("location:login.php");