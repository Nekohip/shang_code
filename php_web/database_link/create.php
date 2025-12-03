<?php
$dsn='mysql:host=localhost;dbname=company;charset=utf8';
$pdo= new PDO($dsn,'root','');

//array_key:取陣列的key做成陣列
$cols=array_keys($_POST);

$sql="INSERT INTO users ";
//join只會讀取值印出來，值之間用第1個參數填充
$sql.="(`".join("`,`",$cols)."`)";
$sql.=" VALUES ( '".join("','",$_POST)."' )";

echo $sql;
//執行sql語法，資料加進資料庫
$pdo->exec($sql);
echo "註冊成功";

?>