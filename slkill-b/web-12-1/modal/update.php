<?php
switch($_GET['table']){
    case "title":
        $title="標題區圖片";
        $header="更新圖片";
        break;
    case "image":
        $title="校園映像圖片";
        $header="更換圖片";
        break;
    case "mvim":
        $title="動畫圖片";
        $header="更換動畫";
        break;

}
?>
<div class="cent"><?=$header;?></div>
<hr>
<!-- 要使用type=file，方法一定要是post、enctype="multipart/form-data" -->
<!-- enctype="multipart/form-data"代表不對檔案進行url編碼(符號轉成%21等)，直接以二進位傳送 -->
<form action="./api/update.php?table=<?=$_GET['table'];?>" method="post" enctype="multipart/form-data">
    <table style="width:70%;margin:auto">
        <tr>
            <td><?=$title;?></td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                <input type="submit" value="更新">
                <input type="reset" value="重置">
            </td>
            <!-- post [img => , id=> ] -->
            <td></td>
        </tr>
    </table>
</form>