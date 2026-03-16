<?php
include_once "db.php";
$post_id=$_POST['id'];
$post=$Post->find($post_id);

$member_id=$Mem->find(['acc'=>$_SESSION['login']])['id'];

if($Log->count(['post_id'=>$post_id,'member_id'=>$member_id])>0){
    $Log->del(['post_id'=>$post_id,'member_id'=>$member_id]);
    $post['good']--;
}else{
    $Log->save(['post_id'=>$post_id,'member_id'=>$member_id]);
    $post["good"]++;
}

$Post->save($post);

