                <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">校園映象資料管理</p>
                    <form method="post" action="./api/edit.php?table=<?=$do;?>">
                        <table width="100%">
                            <tbody>
                                <tr class="yel">
                                    <td width="68%">校園映象資料</td>
                                    <td width="7%">顯示</td>
                                    <td width="7%">刪除</td>
                                    <td></td>
                                </tr>
                                <?php
                                    $total=$Image->count();
                                    $div=3;
                                    $pages=ceil($total/$div);
                                    //p:第幾頁
                                    $now=$_GET['p']??1;
                                    //p - 1 x div(3) = 從第幾張圖(id)開始顯示
                                    //p=1 > 0,1,2 p=2 > 3,4,5 p=3 > 6,7,8
                                    $start=($now-1)*$div;
                                    //設條件限制一頁有多少張圖片、從哪張開始
                                    $rows=$Image->all(" limit $start,$div");
                                foreach($rows as $row):
                                ?>
                                <tr>
                                    <td width="68%">
                                        <img src="./upload/<?=$row['img'];?>" style="width:100px;height:68px;">
                                        <input type="hidden" name='id[]' value="<?=$row['id'];?>">
                                    </td>
                                    <td width="7%">
                                        <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?"checked":"";?>>
                                    </td>
                                    <td width="7%">
                                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                                    </td>
                                    <td>
                                        <input type="button" value="更換圖片" 
                                            onclick="op('#cover','#cvr','./modal/update.php?table=<?=$do;?>&id=<?=$row['id'];?>')">
                                    </td>
                                </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <div class="cent">
                        <!-- 選頁功能 -->
                        <?php 
                            //p>1才顯示左箭頭
                            if($now>1){
                                $prev=$now-1;
                                echo "<a href='?do=$do&p=$prev'> < </a>";
                            }
                        
                            for($i=1;$i<=$pages;$i++){
                                $size=($i==$now)?"24px":"16px";
                                echo "<a href='?do=$do&p=$i' style='font-size:$size;'> $i </a>";
                             }

                            if($now<$pages){
                                $next=$now+1;
                                echo "<a href='?do=$do&p=$next'> > </a>";
                            }

                        ?>
                        </div>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <td width="200px">
                                        <input type="button"
                                            onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                                            value="新增校園映象圖片">
                                    </td>
                                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>