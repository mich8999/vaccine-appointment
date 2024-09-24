<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <script src="https://kit.fontawesome.com/753f35d59e.js" crossorigin="anonymous"></script>
    <link href=".\assets\css\bootstrap.min.css" rel="stylesheet">
    <script src=".\assets\js\bootstrap.bundle.min.js"></script>
    <script src="progress-bar.js"> </script>
    <title>首頁</title>
    <link rel="stylesheet"  href="./home.css">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">六都疫苗預約系統</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

    <header class="main-header">
        <div class="container">
            <!--<a href="#" class="logo">
                <img src="C:\Users\USER\Desktop\IGEM\image\logo.png" alt="Team:-logo">
            </a>-->
            <a href="home.php">
            <i class="fas fa-syringe fa-5x" title="首頁"></i>
            </a>
            <nav class="main-nav">
                    <a href="taipei_city.php">台北市</a>
                    <a href="new_taipei_city.php">新北市</a>
                    <a href="taoyuan_city.php">桃園市</a>
                    <a href="taichung_city.php">台中市</a>
                    <a href="tainan_city.php">台南市</a>
                    <a href="kaohsiung_city.php">高雄市</a>
            </nav>
            <div class="progress-container">
                <progress class="progress-bar" id="myBar"></progress>
            </div> 
        </div>
    </header>

    <div class="covid-19">
        <i class="fas fa-bullhorn" style="color:#253746"></i>
        <label class="title" for="title" style="color:#253746">COVID-19疫苗資訊</label>
        <div class="covid-19-content">
            <i class="fas fa-caret-right"></i>
            <a href="https://www.cdc.gov.tw/Category/MPage/epjWGimoqASwhAN8X-5Nlw" style="text-decoration:none;">疫苗簡介</a>
            <i class="fas fa-caret-right"></i>
            <a href="https://www.cdc.gov.tw/Category/List/Dq7GIwfpZj0TlfqvYBDRAQ" style="text-decoration:none;">COVID-19疫苗Q&A</a>
        </div>
    </div>

    <div class="image">
        <img src="./assets/image/covid-19.jpg" alt="covid-19">
    </div>

    <div class="btn-group">
        <button type="button" class="btn"><a href="taipei_city.php" style="text-decoration:none; color:#fff;">進入填寫表單頁</a></button>
    </div>

    <footer>
            <div class="footer-bottom">
                <p>copyright &copy; Designed by 2021  </p>
            </div>
    </footer>
</body>
</html>