<?php
//session_start();
include('server.php');//驗證

//如果使用者沒有註冊，則進不到此頁面
//if(empty($_SEESION['email'])){
    //header('Location: register_success.php');
//}
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
    <link rel="stylesheet" href="./register_success.css">
    <title>註冊成功</title>
</head>
<body>
    <div class="header">
        <h2>註冊成功</h2>
    </div>

    <div class="content">
        <?php //if(isset($_SESSION['success'])): ?>
            <!--<div class="error success">
                <h3>
                    <?php
                       // echo $_SESSION['success'];
                        //unset($_SESSION['success']);
                    ?>
                </h3>
            </div>-->
        <?php //endif ?>

        <?php if (isset($_SESSION['email'])): ?>
            <P style="font-weight:bolder;font-size:20px">歡迎 <?php echo $_SESSION['email']; ?></P>
            <p><a href="register_success.php?logout='1'" style="text-decoration:none;font-size:20px">登入</p>
        <?php endif ?>
    </div>

</body>
</html>