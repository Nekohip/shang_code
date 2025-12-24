<div class="cent">更換動畫</div>
<hr>
<form action="./api/update_mvim.php" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td>動畫圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                <input type="submit" value="更新">
                <input type="reset" value="重置">
            </td>
            <td></td>
        </tr>
    </table>
</form>