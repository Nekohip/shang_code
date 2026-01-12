<?php 
include_once "db.php";

echo $chk=$Mem->count(['acc'=>$_GET['acc'],'pw'=>$_GET['pw']]);

if($chk>0){
    //在seesion裡存帳號
    $_SESSION['login']=$_GET['acc'];
}