<?php 
include_once "DB.php";
$words=[1=>'一',2=>'二',3=>'三',4=>'四',5=>'五',6=>'六',7=>'七',8=>'八',9=>'九',10=>'十'];

$rows=$Student->all(" group by `classroom` ");
$temp=[];

foreach($rows as $row){
    $year=(int)mb_substr($row['classroom'],0,1,'utf-8');
    $room=(int)mb_substr($row['classroom'],1,2,'utf-8');

    $temp[$row['classroom']]=$words[$year]."年".$words[$room]."班";
}

echo json_encode($temp);   

