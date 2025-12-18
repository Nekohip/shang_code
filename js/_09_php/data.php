<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    [
        "id" => 1,
        "name" => "Eric",
        "mobile" => "0911"
    ],
    [
        "id" => 2,
        "name" => "Amy",
        "mobile" => "0922"
    ],
    [
        "id" => 3,
        "name" => "Kat",
        "mobile" => "0933"
    ]
];

echo json_encode($data);
?>