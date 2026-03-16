<?php
$subject=$Que->find($_GET['id']);
$options=$Que->all(['main_id'=>$_GET['id']]);

?>
<style>
.title{
    width:40%;
}
.graphic{
    width:60%;
    display:flex;
}
.line{
    width:70%;
    background:grey;
    height:30px;
}
.rate{
    width:30%;

}
</style>
<fieldset>
    <legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>
<h3><?=$subject['text'];?></h3>

<?php
foreach($options as $option):
    $total=($subject['vote']!=0)?$subject['vote']:1;
    $rate=$option['vote']/$total;
?>
<div style="display:flex;margin:10px 0;align-items:center;">
    <div class='title'>
        <?=$option['text'];?>
    </div>
    <div class='graphic'>
        <div class="line" style="width:<?=70*$rate;?>%"></div>
        <div class="rate"><?=$option['vote'];?>票(<?=round($rate*100,1);?>%)</div>
    </div>    
</div>
    
<?php endforeach;?>

<div class="ct">
    <button onclick="location.href='?do=que'">返回</button>
</div>

</fieldset>
