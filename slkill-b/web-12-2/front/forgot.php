<fieldset>
    <legend>忘記密碼</legend>
    <form action="./api/forgot.php" method="post">
        <div>請輸入信箱以查詢密碼</div>
        <div><input type="text" name="email" id="email"></div>
        <div id='result'></div>
        <div>
            <input type="button" value="尋找" onclick="forgot()">
        </div>
    </form>
</fieldset>

<script>
function forgot(){
    let email=$("#email").val();
    $.get("./api/chk_email.php",{email},(res)=>{
        $("#result").text(res);
    })
}    
</script>