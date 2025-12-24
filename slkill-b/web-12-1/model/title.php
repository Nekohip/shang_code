<style>
    table {
        width: 70%;
        margin: auto;
    }
</style>
<div class="cent">新增標題區圖片</div>
<hr>
<!-- enctype="multipart/form-data" 不將字符轉成二進位，有文件上傳一定要寫 -->
<form action="./api/insert_title.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr>

        <tr>
            <td>標題區替代文字</td>
            <td><input type="text" name="text" id=""></td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>