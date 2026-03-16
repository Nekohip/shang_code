<fieldset>
    <legend>目前位置：首頁 > 問卷調查</legend>

    <table style="width:90%;margin:auto">
        <tr class='ct'>
            <td>編號</td>
            <td style='width:70%'>問卷題目</td>
            <td>投票總數</td>
            <td>結果</td>
            <td>狀態</td>
        </tr>
        <?php 
        $ques=$Que->all(['main_id'=>0]);
        foreach($ques as $idx => $que):
        ?>
        <tr>
            <td><?=$idx+1;?></td>
            <td><?=$que['text'];?></td>
            <td><?=$que['vote'];?></td>
            <td>
                <a href="?do=result&id=<?=$que['id'];?>">結果</a>
            </td>
            <td>
                <?php
                if(isset($_SESSION['login'])){
                    echo "<a href='?do=vote&id={$que['id']}'>參與投票</a>";
                }else{
                    echo "請先登入";
                }
                ?>
            </td>
        </tr>
        <?php 
        endforeach;
        ?>
    </table>
</fieldset>