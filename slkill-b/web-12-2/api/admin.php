<?php
include_once "db.php";

if(!empty($_POST['del'])){

foreach($_POST['del'] as $id){
    $Mem->del($id);
}

}

to("../back.php?do=admin");

