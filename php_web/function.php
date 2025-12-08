<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
    <style>
        *{
            font-family:"Consolas", "monospace";
        }
    </style>
</head>
<body>
    <?php
        function RightTriangle($size) {
            for($i = 1 ; $i <= $size; $i++)
            {
                for($j = $i ; $j > 0; $j--)
                {
                    echo "*";
                }
                echo "<br>";
            }
        }

        function ReverseRightTriangle($size) {
            for($i = 0 ;$i < $size; $i++)
            {
                for($j = $size ;$j > $i; $j--)
                {
                    echo "*";
                }
                echo "<br>";
            }
        }

        function EquilateralTriangle($size) {
            for($i = 0 ;$i < $size; $i++)
            {
                for($j = 0 ; $j < $size - $i ; $j++)
                {
                    echo "&nbsp";
                }
                for($k = 0; $k < (2 * $i + 1); $k++)
                {
                    echo "*";
                }
                echo "<br>";
            }
        }

        function Rectangle($size) {
            for($i = 1; $i <= $size; $i++)
            {
                for($j = 1; $j <= $size; $j++)
                {
                    if($i == 1 || $i == $size || $j == 1 || $j == $size)
                    {
                        echo "*";
                    }
                    else
                    {
                        echo "&nbsp";
                    }
                }
                echo "<br>";
            }
        }

        function Dimond($size) {
            for($i = 0 ;$i < $size; $i++)
            {
                for($j = 0 ; $j < $size - $i ; $j++)
                {
                    echo "&nbsp";
                }
                $count = 2 * $i + 1;  //2*7+1=15
                for($k = 0; $k < $count; $k++)
                {
                    echo "*";
                }
                echo "<br>";
            }
            $count -= 2;  //13

            for($i = 0 ;$i < $size - 1; $i++)
            {
                for($j = 0; $j < $i + 2; $j++)
                {
                    echo "&nbsp";
                }
                for($k = 0; $k < $count; $k++)
                {
                    echo "*";
                }
                echo "<br>";
                $count -= 2;
            }
        }

        function shape ($shape_spec = "直角三角形", $size = 5) { 
            switch($shape_spec) {
                case "直角三角形":
                    RightTriangle($size);
                    break;
                    
                case "倒直角三角形":
                    ReverseRightTriangle($size);
                    break;

                case "正三角形":
                    EquilateralTriangle($size);
                    break;

                case "矩形":
                    Rectangle($size);
                    break;

                case "菱形":
                    Dimond($size);
                    break;

                default:
                    echo "無此圖型";
            }
        }

        shape("菱形", 10);
    ?>
</body>
</html>