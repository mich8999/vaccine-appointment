<?php
include('server.php');//驗證
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=".\assets\css\bootstrap.min.css" rel="stylesheet">
    <script src=".\assets\js\bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/753f35d59e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./register.css">
    <title>註冊帳號</title>
</head>
<body>
    <div class="header">
        <h2>註冊帳號</h2>
    </div>

    <form method="post" action="register.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <label>帳號</label>
            <i class="fas fa-user" style="padding:5px 3px 0"></i>
            <input type="email" name="email"  placeholder="請輸入您的信箱 ex:@gmail.com" value="<?php echo $email; ?>" required>
        </div>
        <div class="input-group">
            <label>密碼</label>
            <i class="fas fa-lock" style="padding:5px 3px 0"></i>
            <input type="password" name="password_1" required>
        </div>
        <div class="input-group">
            <label>再次確認密碼</label>
            <i class="fas fa-lock" style="padding:5px 3px 0"></i>
            <input type="password" name="password_2" required>
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">註冊</button>
        </div>
        <p>
            已經註冊帳號了? <a href="login.php" style="text-decoration:none;">登入</a>
        </p>
    </form>