<fieldset>
    <legend>目前位置：首頁 > 最新文章區</legend>


<table>
    <tr>
        <td style="width:30%">標題</td>
        <td style="width:50%">內容</td>
        <td></td>
    </tr>
    <?php
        $total=$Post->count(['sh'=>1]);
        $div=5;
        $pages=ceil($total/$div);
        $now=$_GET['p']??1;
        $start=($now-1)*$div;
        $posts=$Post->all(['sh'=>1]," limit $start,$div");

        foreach($posts as $post):
    ?>
    <tr>
        <td class='title'><?=$post['title'];?></td>
        <td class='post'>
            <span class='short'>
                <?=mb_substr($post['text'],0,25);?>...
            </span>
            <span class='full' style='display:none'>
                <?=nl2br($post['text']);?>
            </span>
        </td>
        <!-- 按讚功能 -->
        <!-- <td>
            <?php
                if(isset($_SESSION['login']))
                {
                    $post_id=$post['id'];
                    $member_id=$Mem->find(['acc'=>$_SESSION['login']])['id'];
                    if($Log->count(['post_id'=>$post_id,'member_id'=>$member_id])>0)
                    {
                        echo "<a href='#' class='great' data-id='{$post['id']}'>收回讚</a>";
                    }
                    else
                    {
                        echo "<a href='#' class='great' data-id='{$post['id']}'>讚</a>";
                    }
                }
            ?>
        </td> -->
    </tr>
    <?php
        endforeach;
    ?>
</table>
<div>
   <?php 
   if($now-1>0){
        $prev=$now-1; 
        echo "<a href='?do=news&p=$prev'> < </a>";
   }

   for($i=1;$i<=$pages;$i++){
        $font=($i==$now)?"24px;":"16px;";
        echo "<a href='?do=news&p=$i' style='font-size:$font'> $i </a>";
   }

   if($now+1<=$pages){
        $next=$now+1;
        echo "<a href='?do=news&p=$next'> > </a>";
   }
   

   ?>
</div>

</fieldset>
<script>
$(".title").on("click",function(){
    $(this).next().children('.short,.full').toggle();
})
// 按讚功能
// $(".great").on("click",function(){
//     let id=$(this).data('id')
//     let str=$(this).text();
//     $.post("./api/good.php",{id},()=>{
//         switch(str){
//             case "讚":
//                 $(this).text("收回讚")
//             break;
//             case "收回讚":
//                 $(this).text("讚")
//             break;
//         }
//     })
// })
</script>