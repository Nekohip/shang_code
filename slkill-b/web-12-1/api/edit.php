<?php
//一次編輯很多行
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
        break;
    default:
    //這行在修改動圖時會報錯
    //取text的key做成陣列[0,1,2,3...]
        $ids=array_keys($_POST['text']);
    
}


foreach($ids as $id){
    //判斷post有沒有del
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
            $DB->del($id);
    }else{
        //從id0開始一筆一筆取
        $row=$DB->find($id);
        //row結構:[id => 0, text => "abc", sh => "0"]
        //POST結構:[text => ["fds", "xcv", "rre"],
        //         sh => "4"]
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
                //用post到的value修改取得的資料欄位(value)
                $row['text']=$_POST['text'][$id];
                //比對$_POST['sh'](被選會送該id來)和$id一一比對，post過來id的改1，其他都設0
                $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
            break;
            default:
                $row['text']=$_POST['text'][$id];
                //in_array()比對$_POST['sh']裡有沒有id
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0; 
            break;
        }
        //儲存
        $DB->save($row);
    }
}

to("../back.php?do=$table");

?>