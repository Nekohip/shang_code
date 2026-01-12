<?php 
include_once "db.php";
//檢查資料庫裡有沒有一樣的帳號，有就回傳1，沒有回傳0
echo $Mem->count(['acc'=>$_GET['acc']]);