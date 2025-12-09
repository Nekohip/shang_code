<?php 
include_once "sql.php";
//只要輸入表單、支付方法就能查詢
//右邊用key=>value結構當參數
$rows=all('daily_account',['payment_method'=>'3', 'category'=>'6']);

//print_r($rows);

foreach($rows as $r){
    echo $r['id'].'. '.$r['item'].'<br>';
}
echo "<hr>";

$rows = find('daily_account', [1,2,3,4]);
// echo "<pre>";
//     print_r($rows);
// echo "</pre>";

foreach($rows as $r)
{
    foreach($r as $r)
    {
        echo $r . "&emsp;";
    }
    echo "<br>";
}
// echo $rows['item'];
echo "<hr>";
$rows = update("daily_account", ["item"=>"漢堡", "payment"=>"70"], ["id"=>"1"]);
?>