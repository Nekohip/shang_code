<?php
session_start();
//輸出緩衝
ob_start();

if(!isset($_SESSION['notes']))
{
  $_SESSION['notes'] = [];
}

//註解變數，在session中新增巢狀陣列[年=>[月=>[日=>註解]]]
$nyear = $_POST['year'] ?? null;
$nmonth = $_POST['month'] ?? null;
$nday = $_POST['day'] ?? null;
$note = $_POST['note'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      if(!empty($nyear) && !empty($nmonth) && !empty($nday) &&!empty($note))
      {
        $_SESSION['notes'][$nyear][$nmonth][$nday] = $note;
        echo"註解已新增至{$nyear}年{$nmonth}月{$nday}日，message:{$note}";
        header("Location: clandar_homework.php?dateY={$nyear}&dateM={$nmonth}");
        exit;
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>萬年曆</h1>  

<?php
/*請在這裹撰寫你的萬年曆程式碼*/
$year = isset($_GET["dateY"]) ? $_GET["dateY"] : date("Y");
$month = isset($_GET["dateM"]) ? $_GET["dateM"] : date("n");

$firstweek = date("w", strtotime(date("{$year}-{$month}-1")));
//當年月一日戳記
$firstday = strtotime(date("{$year}-{$month}-1"));
//所有天數
$thismonth_days = date("t", strtotime(date("{$year}-{$month}")));
//一日戳記-第一天星期=第一格戳記
$days = strtotime("- $firstweek days", $firstday);
$weeks = ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];

echo "<div class='container'>";
  echo "<div class='calander'>";
  for($i = 0; $i < 8; $i++)
  {
    echo "<div class='cal-row'>";
    for($j = 0; $j < 7; $j++)
    {
      //判斷各格子要用哪種背景/文字顏色
      $class_day = ["box_day"];
      $class_week = ["box_week"];

      //六日
      if($j == 0 || $j == 6)
      {
        $class_day[] = "color";
        $class_week[] = "color";
      }

      //非本月
      if(date("m", $days) < $month || date("m", $days) > $month)
        $class_day[] = "text_gray";

      //今天
      if(date("Y-m-j") == date("Y-m-j", $days))
        $class_day[] = "today_color";

      //第一列:年月下拉選單
      if($i == 0)
      {
      ?>
        <form action="clandar_homework.php">
          <select name="dateY">
            <?php
              for($y = 1930; $y <= (date("Y") + 20); $y++)
              {
                echo "<option value='{$y}'" . (($y == $year) ? 'selected' : '') . ">{$y}</option>";
              }
            ?>
          </select>年
          <select name="dateM">
            <?php
              for($m = 1; $m <= 12; $m++)
              {
                echo "<option value='{$m}'" . (($m == $month) ? 'selected' : '') . ">{$m}</option>";
              }
            ?>
          </select>月
          <input type="submit" value="確定">
        </form>
      <?php
        break;
      }
      //第二列:星期
      else if($i == 1)
      {
        echo "<div class='".implode(' ', $class_week)."'>".$weeks[$j]."</div>";
      }
      else
      {
        (isset($_SESSION['notes'][date('Y', $days)][date('n', $days)][date('j',$days)])) ? 
        $message = $_SESSION['notes'][date('Y', $days)][date('n', $days)][date('j', $days)] : $message = "";
        //開始印日
        echo "<div class='".implode(' ', $class_day)."'>
                <div>".date('j',$days)."</div>
                <div>{$message}</div>
              </div>";
        $days = strtotime("+1 day", $days);
      }
    }
    echo "</div>";
  }
  echo "</div>";
  ?>

  <div class="tools">
    <!-- 註解表單 -->
    <form action="clandar_homework.php" method="post">
      <label>新增註解</label><br>
      年<select name="year">
        <?php
          for($y = 1930; $y <= (date("Y") + 20); $y++)
          {
            echo "<option value='{$y}'" . (($y == $year) ? 'selected' : '') . ">{$y}</option>";
          }
        ?>
      </select><br>
      月<select name="month">
        <?php
          for($m = 1; $m <= 12; $m++)
          {
            echo "<option value='{$m}'" . (($m == $month) ? 'selected' : '') . ">{$m}</option>";
          }
        ?>
      </select><br>
      日<select name="day">
        <?php
          for($d = 1; $d <= 31; $d++)
          {
            echo "<option value='{$d}'" . (($d == date('j',$days)) ? 'selected' : '') . ">{$d}</option>";
          }
        ?>
      </select><br>
      註解:<input type="text" name="note"><br>
      <input type="submit" value="新增">
    </form>

    <!-- 註解輸入後判斷輸入不完整 -->
    <?php 
      if($_SERVER['REQUEST_METHOD'] === 'POST' && empty($nyear) && empty($nmonth) && empty($nday) && empty($note))
      {
        echo "資料輸入不完整，請重新輸入";
      }
    ?>
  </div> <!--tools-->
</div> <!--container-->
</body>
</html>