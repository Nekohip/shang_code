<?php include_once "db.php";
//$_GET[acc => xxxx, pw => ******]
//if()只有參數0是false，其他都是true
if($Mem->count($_GET)){
    echo 1;
    $_SESSION['mem']=$_GET['acc'];
}else{
    echo 0;
}