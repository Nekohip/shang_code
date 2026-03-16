<?php include_once "db.php";


foreach($_POST['id'] as $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        $Post->del($id);
    }else{
        $post=$Post->find($id);
        $post['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $Post->save($post);
    }
}

to("../back.php?do=news");