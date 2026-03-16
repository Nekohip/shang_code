<div id="orderForm">
<h3 class="ct">線上訂票</h3>
<style>
#orderList{
    margin:auto;
    width:500px;
    text-align: left;
    padding:20px;
    background:#eee;
}    
</style>
<form>
<table id="orderList">
    <tr>
        <td>電影:</td>
        <td>
            <select name="movie" id="movie">
                <?php 
                    $today=date("Y-m-d");
                    $ondate=date("Y-m-d",strtotime("-2 days"));
                    $id=$_GET['id']??0;
                    $movies=$Movie->all(" where `sh`=1 && `ondate` between '$ondate' AND '$today'");
                    foreach($movies as $movie){
                        $selected=(!empty($id) && $id==$movie['id'])?"selected":"";
                        echo "<option value='{$movie['id']}' $selected>{$movie['name']}</option>";
                    }

                ?>

            </select>
        </td>
    </tr>
    <tr>
        <td>日期:</td>
        <td>
            <select name="date" id="date"></select>
        </td>
    </tr>
    <tr>
        <td>場次:</td>
        <td>
            <select name="session" id="session"></select>
        </td>
    </tr>
</table>

<div class="ct">
    <button type="button" class="send-order">確定</button>
    <button type='reset'>重置</button>
</div>
</div>

</form>

<div id="booking" style="display:none;">

</div>
<div id="orderResult" style="display:none;">
結果
</div>

<script>
/*行為區*/    
$("#movie").on("change",function(){
    let movieId=$(this).val();
    selectDate(movieId);
})

$("#date").on("change",function(){
    selectSession();
})

selectDate($("#movie").val());

$(".send-order").on("click",function(){
    $("#booking").show();
    $("#orderForm").hide();
    $("#orderResult").hide();

    let movieId=$("#movie").val();
    let date=$("#date").val();
    let session=$("#session").val();


    $.get("front/booking.php",{movieId,date,session},(booking)=>{
        $("#booking").html(booking);

        $(".prev-step").on("click",function(){
            $("#booking").hide();
            $("#orderForm").show();
            $("#orderResult").hide();
        })
    })

})

/*功能區*/

function selectDate(movieId){
    $.get("api/get_dates.php",{movieId},function(dates){
        $("#date").html(dates);
        selectSession();
    })
}

function selectSession(){
    let movieId=$("#movie").val();
    let date=$("#date").val();
    $.get("api/get_sessions.php",{movieId,date},function(sessions){
        $("#session").html(sessions);
    })
}

</script>