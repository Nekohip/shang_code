<form action="./api/post.php" method="post">
<table class="ct" style="width:80%;margin:auto">
<tr>
    <td style="width:10%">編號</td>
    <td style='width:70%'>標題</td>
    <td style="width:10%">顯示</td>
    <td>刪除</td>
</tr>
<?php 
    $total=$Post->count();
    $div=3;
    $pages=ceil($total/$div);
    $now=$_GET['p']??1;
    //(現在頁數-1)x一頁顯示列數=現在頁數第一個項目id
    $start=($now-1)*$div;
    $posts=$Post->all(" limit $start,$div");
    foreach($posts as $idx => $post):
?>
<tr>
    <!-- posts的key(0,1,2)+start+1=該項目編號  -->
    <td><?=$idx+1+$start;?></td>
    <td><?=$post['title'];?></td>
    <td>
        <input type="checkbox" name="sh[]" value="<?=$post['id'];?>" <?=($post['sh']==1)?'checked':'';?>>
    </td>
    <td>
        <input type="checkbox" name="del[]" value="<?=$post['id'];?>">
        <input type="hidden" name="id[]" value="<?=$post['id'];?>">
    </td>
</tr>
<?php 
    endforeach;

?>

</table>
<div class="ct">
    <?php 
    if($now-1>0){
        $prev=$now-1;
        echo "<a href='?do=news&p=$prev'> < </a>";
    }

    for($i=1;$i<=$pages;$i++){
        $font=($i==$now)?"24px":"16px;";
        
        echo "<a href='?do=news&p=$i' style='font-size:$font'> $i </a>";
    }

    if($now+1<=$pages){
        $next=$now+1;
        echo "<a href='?do=news&p=$next'> > </a>";
    }
    ?>
</div>

<div class="ct">
    <input type="submit" value="確定修改">
</div>
</form>