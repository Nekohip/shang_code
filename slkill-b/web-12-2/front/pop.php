<fieldset>
    <legend>目前位置：首頁 > 人氣文章區</legend>


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

    $posts=$Post->all(['sh'=>1]," order by `good` desc limit $start,$div");
    foreach($posts as $post):
    ?>
    <tr>
        <td class='title'><?=$post['title'];?></td>
        <td class='post'>
            <span class='short'>
                <?=mb_substr($post['text'],0,25);?>...
            </span>
            <span class='full' style='display:none'>
                <?php
                    echo "<h3 style='color:skyblue'>".$Post->type[$post['type']]."</h3>";
                    echo nl2br($post['text']);
                ?>
            </span>
        </td>
        <td>
            <?php
                if(isset($_SESSION['login'])){
                    $post_id=$post['id'];
                    $member_id=$Mem->find(['acc'=>$_SESSION['login']])['id'];
                    echo "<span class='num'>".$Log->count(['post_id'=>$post['id']])."</span>"; 
                    echo "個人說<div class='good'></div>-";
                    if($Log->count(['post_id'=>$post_id,'member_id'=>$member_id])>0){
                        echo "<a href='#' class='great' data-id='{$post['id']}'>收回讚</a>";
                    }else{
                        echo "<a href='#' class='great' data-id='{$post['id']}'>讚</a>";
                    }
                }
            ?>

        </td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<div>
   <?php 
   if($now-1>0){
        $prev=$now-1; 
        echo "<a href='?do=pop&p=$prev'> < </a>";
   }

   for($i=1;$i<=$pages;$i++){
        $font=($i==$now)?"24px;":"16px;";
        echo "<a href='?do=pop&p=$i' style='font-size:$font'> $i </a>";
   }

   if($now+1<=$pages){
        $next=$now+1;
        echo "<a href='?do=pop&p=$next'> > </a>";
   }
   

   ?>
</div>


</fieldset>
<script>
$(".title").hover(
    function(){
        $("#alert").html($(this).next().children('.full').html()).show()
    },
    function(){
        $("#alert").hide();
    }
)
$(".great").on("click",function(){
    let id=$(this).data('id')
    let str=$(this).text();
    let num=0;
    $.post("./api/good.php",{id},()=>{
        switch(str){
            case "讚":
                $(this).text("收回讚")
                num=$(this).siblings('.num').text()*1+1

            break;
            case "收回讚":
                $(this).text("讚")
                num=$(this).siblings('.num').text()*1-1
            break;
        }
        $(this).siblings('.num').text(num);

            //location.reload();
    })
})
</script>