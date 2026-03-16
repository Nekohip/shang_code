<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/add_que.php" method="post">
        <div>
            <label for="">問卷名稱</label>
            <input type="text" name="subject" id="">
        </div>
        <div id="options">
            <div>
                <label for="">選項</label>
                <input type="text" name="opt[]" >
                <input type="button" value="更多" onclick="more()">
            </div>
        </div>
        <input type="submit" value="新增">|
        <input type="reset" value="清空">
    </form>
</fieldset>
<script>
    function more(){
        let opt=`<div>
                    <label for="">選項</label>
                    <input type="text" name="opt[]" >
                 </div>`
        $("#options").prepend(opt);
    }
</script>