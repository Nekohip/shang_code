<?php 
include_once "db.php";

$chk=$Admin->count($_POST);

if($chk){
    $_SESSION['admin']=$_POST['acc'];
    to("../back.php");
}
?>
<script>
    alert("帳號或密碼錯誤");
    location.href="../index.php?do=login";
</script>

