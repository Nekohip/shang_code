<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    <table id="myTable">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>mobile</th>
        </tr>
    </table>
</body>
<script>
    $(document).ready(function ()
    {
        const myTable = $("#myTable");
        console.log("myTable", myTable);

        let url = "./data.php";
        //快捷:jqajax，讀取php檔產生的json
        $.ajax({
            type: "get",
            url: url,
            // data: "data",
            dataType: "json",
            //成功會傳到function(res)
            success: function (res)
            {
                console.log("res", res);
                console.log("res typeof", typeof(res));
                let data = res;

                let tmpText = ``;
                $.each(data, function (key, value){
                    console.log("key", key);
                    console.log("value", value);

                    tmpText += `
                        <tr>
                            <td>${value.id}</td>
                            <td>${value.name}</td>
                            <td>${value.mobile}</td>
                        </tr>
                    `;
                });
                myTable.append(tmpText);
            }
        });
    });
</script>
</html>