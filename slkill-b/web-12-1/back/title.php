                <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                    <p class="t cent botli">網站標題管理</p>
                    <!-- 後台操作表單，按下"修改確定"後會get table=title到api/edit.php(此時?後是do=title，$do是title) -->
                    <form method="post" action="./api/edit.php?table=<?=$do;?>">
                        <table width="100%">
                            <tbody>
                                <tr class="yel">
                                    <td width="45%">網站標題</td>
                                    <td width="23%">替代文字</td>
                                    <td width="7%">顯示</td>
                                    <td width="7%">刪除</td>
                                    <td></td>
                                </tr>
                                <?php
                                $rows=$Title->all();
                                /* $rows=[0 => [id => ,img => ,text => , sh => ],
                                          1 => [id => ,img => ,text => , sh => ],
                                          2 => ...] */

                                //用迴圈將資料庫的欄位做成表格
                                foreach($rows as $row):
                                ?>
                                <tr>
                                    <td width="45%">
                                        <img src="./upload/<?=$row['img'];?>" style="width:300px;height:30px;">
                                    </td>
                                    <td width="23%">
                                        <!-- name = text[0](id多少key就多少)  value = row["text"]的內容 -->
                                        <input type="text" name='text[<?=$row['id'];?>]' value="<?=$row['text'];?>">
                                    </td>
                                    <td width="7%">
                                        <!-- 被選得radio submit時會送value出去，所以是送id出去，且只有一個值[sh => "6"]，不是陣列 -->
                                        <input type="radio" name="sh" value="<?=$row['id'];?>" <?=($row['sh']==1)?"checked":"";?>>
                                    </td>
                                    <td width="7%">
                                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                                    </td>
                                    <td>
                                        <input type="button" value="更新圖片" 
                                            onclick="op('#cover','#cvr','./modal/update.php?table=<?=$do;?>&id=<?=$row['id'];?>')">
                                    </td>
                                </tr>
                                <?php
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <table style="margin-top:40px; width:70%;">
                            <tbody>
                                <tr>
                                    <td width="200px">
                                        <input type="button"
                                            onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                                            value="新增網站標題圖片">
                                    </td>
                                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                </div>