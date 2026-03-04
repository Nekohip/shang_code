<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

header('Access-Control-Allow-Origin: *');
// 1. 初始化
$ch = curl_init();

// 2. 設定選項
$url = 'https://data.ntpc.gov.tw/api/v1/openapi/units/1100000';

// $url = 'https://data.moenv.gov.tw/api/v2/gp_p_01?api_key=58d6040c-dca7-407f-a244-d0bfdfa8144a&limit=1000&sort=ImportDate%20desc&format=JSON';
curl_setopt($ch, CURLOPT_URL, $url); // 要造訪的網址
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);         // 將結果以字串回傳，而不是直接顯示在螢幕上
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);      

// 3. 執行
$data = curl_exec($ch);
echo $data;

// 檢查是否有錯誤
// if ($output === false) {
//     echo "cURL Error: " . curl_error($ch);
// } else {
//     echo "抓取成功！";
// }

// echo json_encode($data);
// echo json_encode($data);

// json_decode json to array
// json_encode array to json

// dd($output);

// 4. 關閉資源
curl_close($ch);
