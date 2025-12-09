<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=finance_db";
$pdo=new PDO($dsn,'root','');
//將key=>value結構轉換成`key`='value'，SQL句子裡key和value沒分開時使用
function array_trans($array){
    foreach($array as $key => $value){
        $tmp[]="`$key`='$value'";
    }
 return $tmp;          
}

function all($table='daily_account',$where=[],$desc=' ORDER BY `id` ASC')
{    
    global $pdo;
    $sql="SELECT * FROM $table ";

    if(is_array($where) && count($where)>0){
        
        $tmp = array_trans($where);
        //WHERE `key1`='value1' && `key2`='value2'...
        $sql .= " WHERE ".join(" && ",$tmp) ;
    }else if(is_string($where) && !empty($where)){
          $sql .= $where  ;
    }

    $sql .= $desc;


    echo $sql;
    echo "<hr>";
    
    $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
    
    return $rows;
}

function find($table,$id)
{
    global $pdo;
    
    $sql="SELECT * FROM $table ";
    if(is_array($id) && count($id)>0)
    {
        //將key=>value結構轉換成`key`='value'
        foreach($id as $value)
        {   
            $tmp[] = "$value";
        }
        //WHERE `id` IN ('1', '2', '3')
        $sql .= " WHERE `id` IN (" . join(" , ",$tmp) . ")"  ;
   
    }
    //is_numeric()判斷是否int或string的數字
    else if(is_numeric($id) && !empty($id))
    {
        $sql .= "WHERE `id` = '$id'";
    }

    echo $sql;
    echo "<hr>";
    
    $row=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
    
    return $row;
}

function insert($table,$array){
    global $pdo;
    $sql="INSERT INTO `{$table}` ";
    //取key
    $keys=array_keys($array);
    $sql .="(`". join("`,`",$keys). "`)";

    //取value
    $sql .=" VALUES ('". join("','",$array). "')";
    echo $sql;
    echo "<hr>";
    // return $pdo->exec($sql);
}

function update($table,$array,$limit=[]){
    global $pdo;
    
    $sql="UPDATE $table ";
    $tmp=array_trans($array);
    $sql .=" SET ".join(", ",$tmp);
    if(!empty($limit)){
        $tmp2=array_trans($limit);
        //不能判斷多個id，用來判斷不同欄位
        $sql .=" WHERE ".join(" && ",$tmp2);
    }else{
        $sql .=" WHERE id='{$array['id']}'";
    }
    echo $sql;
    echo "<hr>";
    // return $pdo->exec($sql);
}

function delete($table,$id){
    global $pdo;
   
    $sql="DELETE FROM `{$table}` ";
    if(is_array($id)){
        $tmp=array_trans($id);
        $sql .= " WHERE ".join(" && ",$tmp) ;
    }else{
        $sql .= " WHERE `id`='$id' ";
    }
    echo $sql;
    echo "<hr>";
    
    return $pdo->exec($sql);
}
?>