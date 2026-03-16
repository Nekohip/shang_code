<?php include_once "db.php";

$posts=$Post->all(['type'=>$_GET['type']]);

foreach($posts as $post){
    echo "<div>";
    echo "<a href='javascript:getPost({$post['id']})'>";
    echo $post['title'];
    echo "</a>";
    echo "</div>";
}