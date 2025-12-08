<?php 
include "sql.php";
include_once "sql_find.php";
//只要輸入表單、支付方法就能查詢
$rows=all('daily_account',['payment_method'=>'3']);

//print_r($rows);
foreach($rows as $r){
    echo $r['id'].'. '.$r['item'].'<br>';
}
echo "<hr>";

$rows = find('daily_account',"3");
echo "<pre>";
    print_r($rows);
echo "</pre>";

foreach($rows as $r){
    echo $r.'&emsp;';
}
?>