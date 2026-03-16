<?php include_once("../api/db.php");
$movie=$Movie->find($_GET['movieId']);

//取得所有該場次已訂位的座位資料
//1.先取得該場次的訂單
$orders=$Order->all(" WHERE movie='{$movie['name']}' && date='{$_GET['date']}'  && session='{$duration[$_GET['session']]}'");
//dd($orders);
//2.宣告座位的空陣列
$seats=[];
//3.將每筆訂單的座位放入$seats陣列中
foreach($orders as $order){
    $ordered_seats=unserialize($order['seats']);
    $seats=array_merge($seats,$ordered_seats);
}

//dd($seats);
?>
<style>
#box{
    width:540px;
    height:370px;
    margin:auto;
    background-image:url('../icon/03D04.png');
    background-size:cover;
    padding-top:18px;
    box-sizing:border-box;
}
.seats{
    width:325px;
    height:348px;
    margin:auto;
    display:flex;
    flex-wrap:wrap;
}
.seat{
    width:65px;
    height:87px;
    box-sizing:border-box;
    padding:3px;
    text-align: center;
    position:relative;
}

.chk{
    position:absolute;
    bottom:5px;
    right:5px;
}
.booked{
    background-image:url('../icon/03D03.png');
    background-position:center;
    background-repeat:no-repeat;
}
.null{
    background-image:url('../icon/03D02.png');
    background-position:center;
    background-repeat:no-repeat;
}
</style>


<div id="box">
<div class="seats">
<?php 
for($i=0;$i<20;$i++){
    if(in_array($i,$seats)){
        echo "<div class='seat booked'>";
    }else{
        echo "<div class='seat null'>";
    }
    /* echo "<div class='seat booked'>"; */
    echo (floor($i/5)+1) ."排". ($i%5 +1 )."號";

    if(!in_array($i,$seats)){
        echo "<input type='checkbox' value='$i' class='chk'>";
    }
    echo "</div>";
  
}
?>
</div>


</div>



<div style="width:540px;margin:auto;background:#ccc;padding:10px;">
    <div style="width:70%;margin:auto">
        <div style="margin:5px 0;">您選擇的電影是：<?=$movie['name'];?></div>
        <div style="margin:5px 0;">您選擇的時刻是：<?=$_GET['date'];?> <?=$duration[$_GET['session']];?></div>
        <div style="margin:5px 0;">您已經勾選<span id='tickets'></span>張票，最多可以購買四張票</div>
    </div>
    <div class="ct">
        <button class='prev-step'>上一步</button>
        <button class='order-btn'>訂購</button>
    </div>
</div>

<script>

let seats=new Array();

$(".chk").on('click',function(){
    let seat=$(this).val();

    if($(this).prop('checked')){
    //加到陣列
        if(seats.length<4){
            seats.push(seat)
        }else{
            alert("最多只能勾選四張票")
            $(this).prop('checked',false)
        }
    }else{
    //移出陣列
        seats.splice(seats.indexOf(seat),1)
    }
    $("#tickets").text(seats.length)
    //console.log(seats)
})

$(".order-btn").on("click",function(){
    let movie=$("#movie").val();
    let date=$("#date").val();
    let session=$("#session").val();
    $.post("api/order.php",{seats,movie,date,session},(res)=>{
       // console.log(seats,movie,date,session)
        //console.log(res)

        $("#orderResult").html(res)
        
        $("#booking").hide();
        $("#orderForm").hide();
        $("#orderResult").show();
    })

        
})
</script>