<?php 
session_start();
//移除變數
unset($_SESSION['login']);
header("location:index.php");
