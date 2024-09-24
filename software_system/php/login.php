<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link href=".\assets\css\bootstrap.min.css" rel="stylesheet">
    <script src=".\assets\js\bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/753f35d59e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./login.css">
    <script>
        function fnHelp(){
            alert("此六都疫苗預約系統用於模擬實際狀況，為調查民眾操作狀況而做評估\n 請輸入以下帳號和密碼，做登入動作\n 帳號:test@gmail.com\n 密碼:123")
        }
    </script>
    <title>登入</title>
</head>
<body>
    <div class= "login">
        <form class="form" action="login.php" method="post">
            <?php include('errors.php'); ?>
            <div class="login__title">            
                <h2 class="login__title__main">六都疫苗預約系統</h2>
                <i class="login__title__icon fas fa-syringe fa-5x"></i>
            </div>
           
            <div class="group">
                <label for="user_id">帳號</label>
                <i class="fas fa-user"></i>
                <input type="email" name="email" id="user_id" placeholder="  請輸入您的信箱 ex:@gmail.com" value="<?php echo $email;?>" required>
            </div>
            <div class="group">
                <label for="user_password">密碼</label>
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="user_password" required>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="chkrebaccount" id="test" checked>
                <label class="form-check-label" for="ttt">記住帳號</label>
            </div>
            <div class="btn-group">
                <button type="submit" name="login" class="btn">登入</button>
                <button type="button" class="btn"><a href="register.php" style="text-decoration:none; color:#fff;">註冊帳號</a></button>
                <!--
                <button class="btn" onclick="fnHelp();">註冊帳號</button>
                <input type="submit" class="btn" name="login" value="登入">
                <input type="button" class="btn" value="說明" onclick="fnHelp();">
                -->
            </div>
        </form>
    </div>
</body>
</html>