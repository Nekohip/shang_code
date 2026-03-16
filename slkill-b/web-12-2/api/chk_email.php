<?php 
include_once "db.php";

$chk=$Mem->find(['email'=>$_GET['email']]);

if(!empty($chk)){
    echo "你的密碼為：".$chk['pw'];
}else{
    echo "查無此資料";
}