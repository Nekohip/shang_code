<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員註冊</title>
    <link rel="stylesheet" href="./css/style_reg.css">
</head>
<body>
    <div class="container">
        <h2>會員註冊</h2>
        <form action="create_acc.php" method="post">
            <div class="input_bar">
                <label for="account">帳號:</label>
                <input type="text" id="account" name="account" required>
            </div>

            <div class="input_bar">
                <label for="password">密碼:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input_bar">
                <label for="name">姓名:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input_bar">
                <label for="tel">電話:</label>
                <input type="tel" id="tel" name="tel" required>
            </div>

            <div class="input_bar">
                <label for="address">地址:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="input_bar">
                <label for="national_id">身分證字號:</label>
                <input type="text" id="national_id" name="national_id" required>
            </div>

            <div class="input_bar">
                <label for="email">電子信箱:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="input_bar">
                <label for="post_code">郵遞區號:</label>
                <input type="text" id="post_code" name="post_code" required>
            </div>

            <div class="buttons">
                <input type="submit" value="註冊">
                <input type="reset" value="重置">
            </div>

            <div class="input_bar">
                <label for="post_code">test:</label>
                <input type="time" id="post_code" name="post_code" required><div class="input_bar">
            </div>
        </form>
    </div>
</body>
</html>