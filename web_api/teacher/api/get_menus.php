<?php 
//取得資料表中的選單

$menus=[
    '回首頁'=>'http://localhost/webapi.html',
    '校園映像'=>'http://localhost/image.html',
    '更多消息'=>'http://localhost/more_news.html',
    '周邊景點'=>'http://localhost/views.html',

];

echo json_encode($menus);


?>



