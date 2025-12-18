<?php
include "./_01_hello_php.php";
dd($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table {
            width: 50%;
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
        }

        td,th {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>mobile</th>
        </tr>

        <?php foreach($data as $value) : ?>
            <tr>
                <td><?= $value["id"] ?></td>
                <td><?= $value["name"] ?></td>
                <td><?= $value["mobile"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>