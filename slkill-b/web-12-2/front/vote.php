<?php
$subject=$Que->find($_GET['id']);
$options=$Que->all(['main_id'=>$_GET['id']]);

?>

<fieldset>
    <legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>
<h3><?=$subject['text'];?></h3>

<?php
foreach($options as $option){
    echo "<p>";
    echo "<input type='radio' name='opt' value='{$option['id']}'>";
    echo $option['text'];
    echo "</p>";
    }

?>

<div class="ct">
    <button onclick="vote()">我要投票</button>
</div>

</fieldset>
<script>
function vote(){
    let id=$("input[type='radio']:checked").val()
    $.post("./api/vote.php",{id},()=>{
        location.href="?do=result&id=<?=$_GET['id'];?>"
    })
}
</script>