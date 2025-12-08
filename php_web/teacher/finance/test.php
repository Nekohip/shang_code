<?php 
include_once "sql.php";
//只要輸入表單、支付方法就能查詢
$rows=all('daily_account',['payment_method'=>'3']);

//print_r($rows);
foreach($rows as $r){
    echo $r['id'].'. '.$r['item'].'<br>';
}