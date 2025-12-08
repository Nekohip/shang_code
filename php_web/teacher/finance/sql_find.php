<?php
//all();

function find($table='daily_account',$id=[],$desc=' ORDER BY `id` ASC'){
    $dsn="mysql:host=localhost;charset=utf8;dbname=finance_db";
    $pdo=new PDO($dsn,'root','');
    
    $sql="SELECT * FROM $table ";
    if(is_array($id) && count($id)>0){
        //將key=>value結構轉換成`key`='value'
        $sql .= " WHERE `id` IN (".join(", ", $id).")" ;
        //WHERE `key1`='value1' && `key2`='value2'...
        
    }
    else if(is_string($id) && !empty($id)){
          $sql .= "WHERE `id` = '$id'";
    }

    $sql .= $desc;


    echo $sql;
    echo "<hr>";
    
    // $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
    $rows=$pdo->query($sql)->fetch(PDO::FETCH_NUM);
    
    return $rows;
}


?>