<?php 
$movie=$Movie->find($_GET['id']);
$date=explode('-',$movie['ondate']);
$year=(int)$date[0];
$month=(int)$date[1];
$day=(int)$date[2];

?>

<h3 class="ct">編輯院線片</h3>
<form action="api/save_movie.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td>影片資料</td>
            <td>
                <div>
                    <lable>片名：</lable>
                    <input type="text" name="name" value="<?=$movie['name'];?>">
                </div>
                <div>
                    <lable>分級：</lable>
                    <select  name="level" id="">
                        <option value="1" <?=($movie['level']==1)?'selected':'';?>>普遍級</option>
                        <option value="2" <?=($movie['level']==2)?'selected':'';?>>輔導級</option>
                        <option value="3" <?=($movie['level']==3)?'selected':'';?>>保護級</option>
                        <option value="4" <?=($movie['level']==4)?'selected':'';?>>限制級</option>
                    </select>(選擇擇分級)
                </div>
                <div>
                    <lable>片長：</lable>
                    <input type="text" name="length"  value="<?=$movie['length'];?>">
                </div>
                <div>
                    <lable>上映日期：</lable>
                    <select name="year" id="">
                <option value="2026" <?=($year==2026)?'selected':'';?>>2026</option>
                <option value="2027" <?=($year==2027)?'selected':'';?>>2027</option>
                <option value="2028" <?=($year==2028)?'selected':'';?>>2028</option>
                    </select>年
                    <select name="month" id="">
                    <?php 
                    for($i=1;$i<=12;$i++){
                        $selected=($month==$i)?'selected':'';
                        echo "<option value='$i' $selected>$i</option>";
                    }               
                    ?>
                    </select>月
                    <select name="day" id="">
                    <?php 
                    for($i=1;$i<=31;$i++){
                        $selected=($day==$i)?'selected':'';
                        echo "<option value='$i' $selected>$i</option>";
                    }
                    ?>
                    </select>日
                </div>
                <div>
                    <lable>發行商：</lable>
                    <input type="text" name="publisher"  value="<?=$movie['publisher'];?>">
                </div>
                <div>
                    <lable>導演：</lable>
                    <input type="text" name="director"  value="<?=$movie['director'];?>">
                </div>
                <div>
                    <lable>預告影片：</lable>
                    <input type="file" name="trailer" id="">
                </div>
                <div>
                    <lable>電影海報：</lable>
                    <input type="file" name="poster" id="">
                </div>
            </td>
        </tr>
        <tr>
            <td>劇情簡介</td>
            <td>
                <textarea name="intro" style="width:95%;height:50px"><?=$movie['intro'];?></textarea>
            </td>
        </tr>
    </table>
    <div class="ct">
        <input type="hidden" name="id" value="<?=$movie['id'];?>">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>
</form>