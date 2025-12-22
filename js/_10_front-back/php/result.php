<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$input = $_GET;
$data = [
    "num1" => $input["num1"] ?? 0,
    "num2" => $input["num2"] ?? 0,
    "opt" => $input["opt"] ?? "+"
];

$num1 = $data["num1"];
$num2 = $data["num2"];
$opt = $data["opt"];

// dd($data);

$calcResult = 0;
$textResult = "";

switch($opt)
{
    case "+":
        $calcResult = $num1 + $num2;
        $textResult = "$num1 + $num2 = $calcResult";
        break;
    case "-":
        $calcResult = $num1 - $num2;
        $textResult = "$num1 - $num2 = $calcResult";
        break;
    case "*":
        $calcResult = $num1 * $num2;
        $textResult = "$num1 * $num2 = $calcResult";
        break;
    case "/":
        $calcResult = $num1 / $num2;
        $textResult = "$num1 / $num2 = $calcResult";
        break;
    default:
        break;
}

$data["calcResult"] = $calcResult;
$data["textResult"] = $textResult;
// dd($data);
//回傳的資料只能是純json格式才能被接收，不能參雜其他東西
echo json_encode($data);