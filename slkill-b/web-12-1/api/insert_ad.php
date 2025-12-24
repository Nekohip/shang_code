<?php 
include_once "db.php";

$_POST['sh']=1;


$Ad->save($_POST);

to("../back.php?do=ad");
