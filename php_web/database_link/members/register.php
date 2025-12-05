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
            <label for="account">帳號:</label>
            <input type="text" id="account" name="account" required>

            <label for="account">密碼:</label>
            <input type="password" id="password" name="password" required>

            <label for="account">姓名:</label>
            <input type="text" id="name" name="name" required>

            <label for="account">電話:</label>
            <input type="text" id="tel" name="tel" required>

            <label for="account">地址:</label>
            <input type="text" id="address" name="address" required>

            <label for="account">身分證字號:</label>
            <input type="text" id="national_id" name="national_id" required>

            <label for="account">電子信箱:</label>
            <input type="text" id="email" name="email" required>

            <label for="account">郵遞區號:</label>
            <input type="text" id="post_code" name="post_code" required>
        </form>
    </div>
</body>
</html>