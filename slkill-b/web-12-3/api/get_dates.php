<?php 
include_once "../api/db.php";

$movie=$Movie->find($_GET['movieId']);
$today=strtotime(date("Y-m-d"));
$ondate=strtotime($movie['ondate']);

$gap=floor(($today-$ondate)/(60*60*24));

for($i=0;$i<(3-$gap);$i++){
    $date=date("Y-m-d",strtotime("+$i days",$today));
    $str=date("m月d日 l",strtotime("+$i days",$today));
echo "<option value='$date'>";
echo $str;
echo "</option>";
}
