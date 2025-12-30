<?php 
include_once "db.php";
//post [img => "01B02.jpg", text => "123"]
//get [table => "title"]

$table=$_GET['table'];
$DB=${ucfirst($table)};

if(!empty($_FILES['img']['tmp_name'])){
    //move_uploaded_file(暫存路徑, 新位置及名字) 把上傳的文件移動到新位置
    move_uploaded_file($_FILES['img']['tmp_name'], "../upload/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

switch($table){
    case "title":
        $_POST['sh']=($DB->count(['sh'=>1])==0)?1:0;
        break;
    default:
        if($table != "admin")
        {
            $_POST['sh']=1;
        }
    }        

$DB->save($_POST);

to("../back.php?do=$table");