<?php
include_once "db.php";
//此時?後是table=$do，從哪過來就會改到哪個table
$table=$_GET['table'];
//將$table變數名第一個字變大寫，傳來什麼就能呼叫它的DB物件方法
$DB=${ucfirst($table)};
$ids=[];
//將傳過來要修改的欄位做成陣列，用$table判斷做成哪種
switch($table){
    case "mvim":
    case "image":
        $ids=$_POST['id'];
    break;
    case "admin":
        $ids=array_keys($_POST['acc']);
    default:
    //這行在修改動圖時會報錯
    //取text的key做成陣列
        $ids=array_keys($_POST['text']);
    
}

foreach($ids as $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $DB->del($id);
    }else{
        $row=$DB->find($id);

        switch($table){
            case "admin":
                $row['acc']=$_POST['acc'][$id];
                $row['pw']=$_POST['pw'][$id];
            break;
            case "menu":
                $row['text']=$_POST['text'][$id];
                $row['href']=$_POST['href'][$id];
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0; 
            break;
            case "mvim":
            case "image":
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0; 
            break;
            case "title":
                $row['text']=$_POST['text'][$id];
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0; 
            break;
            default:
                $row['text']=$_POST['text'][$id];
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0; 
            break;
        }

        $DB->save($row);
    }
}

to("../back.php?do=$table");

?>