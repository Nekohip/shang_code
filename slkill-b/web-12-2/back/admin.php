<fieldset>
    <legend>帳號管理</legend>
<form action="./api/admin.php" method="post">    
<table class='ct' style='margin:auto;width:70%'>
    <tr>
        <td class='clo'>帳號</td>
        <td class='clo'>密碼</td>
        <td class='clo'>刪除</td>
    </tr>
    <?php 
    $members=$Mem->all();
    foreach($members as $member):
        if($member['acc']!='admin'):
    ?>
    <tr>
        <td><?=$member['acc'];?></td>
        <td><?=str_repeat("*",mb_strlen($member['pw']));?></td>
        <td>
            <input type="checkbox" name="del[]" value="<?=$member['id'];?>">
        </td>
    </tr>
    <?php
        endif;
    endforeach;
    ?>
</table>
<div class='ct'>
    <input type="submit" value="確定刪除">
    <input type="reset" value="清空選取">
</div>
</form>
<h2>新增會員</h2>
    <div style='color:red'>*請設定您要註冊的帳號及密碼(最長12個字元)</div>
    <form action="./api/reg.php" method="post">
        <table>
            <tr>
                <td>Step1:登入帳號</td>
                <td>
                    <input type="text" name="acc" id="acc">
                </td>
            </tr>
            <tr>
                <td>Step2:登入密碼</td>
                <td>
                    <input type="password" name="pw" id="pw">
                </td>
            </tr>
            <tr>
                <td>Step3:再次確認密碼</td>
                <td>
                    <input type="password" name="pw2" id="pw2">
                </td>
            </tr>
            <tr>
                <td>Step4:信箱(忘記密碼時使用)</td>
                <td>
                    <input type="email" name="email" id="email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="button" value="新增" onclick='reg()'>
                    <input type="reset" value="清除">
                </td>
                <td></td>
            </tr>
        </table>
    </form>

</fieldset>

<script>
function reg(){
    let user={
        'acc':$("#acc").val(),
        'pw':$("#pw").val(),
        'pw2':$("#pw2").val(),
        'email':$("#email").val()
    }

    if(user.acc !='' && user.pw !='' && user.pw2 !='' && user.email !=''){
        if(user.pw == user.pw2){
            $.get('./api/chk_acc.php',{'acc':user.acc},(chk)=>{
                //console.log(chk)
                if(!parseInt(chk)){
                    $.post("./api/reg.php",user,(res)=>{
                        $("form").trigger('reset');
                        location.reload();
                    })
                }else{
                    alert("帳號重覆")
                }
            })
        }else{
            alert("密碼錯誤")
        }
    }else{
        alert("不可空白")
    }

}
</script>