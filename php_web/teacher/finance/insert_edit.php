<?php
update('daily_account',$_POST);
$pdo->exec($sql);
// header("location:index.php");
?>