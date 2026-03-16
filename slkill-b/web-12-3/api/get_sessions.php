<?php 
include_once "db.php";

$movieId=$_GET['movieId'];
$movie=$Movie->find($movieId)['name'];  //取得電影名稱
$date=strtotime($_GET['date']);

$today=strtotime(date("Y-m-d"));
$start=1;
if($date==$today){
    $H=date("G");
    //echo $H;
    if($H>=14){
        $start=ceil(($H-13)/2)+1;
    }
}


for($i=$start;$i<=5;$i++){

    //$sql="SELECT sum(`qt`) as 'qt' FROM `orders` WHERE movie='$movie' && date='{$_GET['date']}'  && session='{$duration[$i]}'";

    $qt=20-$Order->sum('qt'," WHERE movie='$movie' && date='{$_GET['date']}'  && session='{$duration[$i]}'");
    echo "<option value='$i'>{$duration[$i]} 剩餘座位 $qt</option>";
}
