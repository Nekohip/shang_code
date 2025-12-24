<?php
include_once "db.php";

if(!empty($_FILES["img"]["tmp_name"]))
{
    //move_uploaded_file(文件, 位置): 把上傳的文件移動到新位置
    move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/" . $_FILES["img"]["name"]);
    $_POST["img"] = $_FILES["img"]["name"];
}

$Title -> save($_POST);
to("../back.php?do=title");
?>