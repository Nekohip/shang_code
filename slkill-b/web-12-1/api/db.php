<?php
Class DB{
    private $dsn="mysql:host=localhost;dbname=db01;charset=utf8";
    private $table;
    private $pdo;
                                
    public function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }
    //$arg是接在$sql後面的where判斷(where 欄位=值)
    //單條件要寫where，多條件寫陣列如:[a, b, c...]
    public function all(...$arg){

        $sql="select * from `$this->table` ";
        
            if(isset($arg[0])){
                if(is_array($arg[0])){
                    //多條件
                    $tmp=$this->arrayToSql($arg[0]);
                    $sql .= " where " . implode(" && ",$tmp);
                }else{
                    //單條件
                    $sql .=$arg[0];
                }
            }
            //如果有第二個陣列就繼續接在後面
            if(isset($arg[1])){
                $sql .=$arg[1];
            }
        // echo $sql;
        //將所有被選資料的欄位做成二維陣列:
        /*[
            0 => [
                  a => 1
                  b => 2
                  c => 3],
            1 => [
                  a => 1
                  b => 2
                  c => 3]...
            ]*/
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function find($id){
        $sql="select * from `$this->table` ";
                if(is_array($id)){
                    //多條件
                    $tmp=$this->arrayToSql($id);
                    $sql .= " where " . implode(" && ",$tmp);
                }else{
                    //單條件
                    $sql .= " where `id`='$id' ";
                }
          
        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function save($array){
        if(isset($array['id'])){
            $this->update($array);
        }else{
            $this->insert($array);
        }

    }


    function update($array){
        $sql="UPDATE $this->table ";
        $tmp=$this->arrayToSql($array);
        $sql .=" SET ".join(", ",$tmp);
        $sql .=" WHERE id='{$array['id']}'";
        //$sql .=" WHERE id='$id'";
        
        echo $sql;
        return $this->pdo->exec($sql);
    }

    function insert($array){

        $sql="INSERT INTO `{$this->table}` ";
        $keys=array_keys($array);
        $sql .="(`". join("`,`",$keys). "`)";
        $sql .=" VALUES ('". join("','",$array). "')";
        echo $sql;
        //echo "<hr>";
        return $this->pdo->exec($sql);

    }

    function del($id){
        $sql="DELETE from `$this->table` ";
                if(is_array($id)){
                    //多條件
                    $tmp=$this->arrayToSql($id);
                    $sql .= " where " . implode(" && ",$tmp);
                }else{
                    //單條件
                    $sql .= " where `id`='$id' ";
                }
          
        echo $sql;
        return $this->pdo->exec($sql);
    }


    private function arrayToSql($array){
        $tmp=[];
        foreach($array as $key => $value){
            $tmp[]="`$key`='$value'";
        }

        return $tmp;
    }

    function count(...$arg)
    {
        $sql="select count(*) from `$this->table` ";
        
        if(isset($arg[0])){
            if(is_array($arg[0])){
                //多條件
                $tmp=$this->arrayToSql($arg[0]);
                $sql .= " where " . implode(" && ",$tmp);
            }else{
                //單條件
                $sql .=$arg[0];
            }
        }

        if(isset($arg[1])){
            $sql .=$arg[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }
}

function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
}

function to($url){
    header("location:".$url);
}

$Title=new DB('title');
$Ad=new DB('ad');
$Mvim=new DB('mvim');
$News=new DB('news');
$Image=new DB('image');
$Admin=new DB('admin');
$Menu=new DB('menu');
$Total=new DB('total');
$Bottom=new DB('bottom');