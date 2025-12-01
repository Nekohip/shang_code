<?php
$dsn='mysql:host=localhost;dbname=company;charset=utf8';
$pdo= new PDO($dsn,'root','');
//array_keys:取出post的key存進陣列
$cols=array_keys($_POST);

$sql="INSERT INTO users ";
//post的key array用join展開，每個值間加上`,`，當作sql語法database的key(前後補`)
$sql.="(`".join("`,`",$cols)."`)";
//將post陣列用join展開，每個值間加上','，當作value(前後補')
$sql.=" VALUES ( '".join("','",$_POST)."' )";

echo $sql;

$pdo->exec($sql);
echo "註冊成功";



?>