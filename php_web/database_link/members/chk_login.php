<?php
$dsn="mysql:host=localhost;dbname=company;charset=utf8";
$pdo=new PDO($dsn,'root','');

$acc=$_POST['account'];
$pw=$_POST['password'];
//如果資料庫有一樣的帳號密碼，count()會回傳1，沒有符合就是0
$sql="SELECT count(`id`) as 'count' FROM `users` WHERE `account`='$acc' && `password`='$pw'";
//fetch一定回傳陣列，有兩個值[count(`id`) => 1, 0 => 1]
// $row = $pdo -> query($sql) -> fetch();

//用fetchColumn()只回傳值(變數)
$row = $pdo -> query($sql) -> fetchColumn();
print_r($row);

//加?參數，用GET來判斷login.php成功或失敗顯示什麼
if($row > 0)
{
    echo "登入成功";
    header("location:result.php?account=$acc");
}
else
{
    echo "登入失敗";
    header("location:login.php?error=1");
}
?>