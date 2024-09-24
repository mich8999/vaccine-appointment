<!--<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
$_SESSION['name'];
$name=$_SESSION['name'];
include_once('connect.php');//連結資料庫
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="./city.css">
    <script src="https://kit.fontawesome.com/753f35d59e.js" crossorigin="anonymous"></script>
    <link href=".\assets\css\bootstrap.min.css" rel="stylesheet">
    <script src=".\assets\js\bootstrap.bundle.min.js"></script>
    <script src="progress-bar.js"> </script>
    <title>高雄市</title>
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
    <section>
        <div class="info">  
            <div class="container content">
                <!-- 嵌入 Google map -->
                <div class="map">
                    <iframe class="map__iframe" src="https://www.google.com/maps/d/u/0/embed?mid=1fLhlvhphOWy7PekZQTcRhnusExdoGk-C"></iframe>
                </div>
        <div class= "reservation">
            <form class="form" enctype="multipart/form-data" accept="image/png,image/jpeg,image/jpg,image/gif" action="result.php" method="post">
                    <h3>請輸入資料</h3>
                    <div class="input">
                        <div class="form__item">
                            <label for="txtData" class="form-label form__item__title">接種日期:</label>
                            <div class="form__item__box">
                                <input type="date" name="txtDate1" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form__item">
                            <label class="form__item__title">劑別:</label>
                            <div class="form__item__radio">
                                <input class="form-check-input" type="radio" name="option" id="inlineRadio1" value="第一劑" required>
                                <label class="form-check-label" for="inlineRadio1" style="font-weight:bolder">第一劑</label>
                            </div>
                            <div class="form__item__radio">
                                <input class="form-check-input" type="radio" name="option" id="inlineRadio2" value="第二劑" required>
                                <label class="form-check-label" for="inlineRadio2" style="font-weight:bolder">第二劑</label>
                            </div>
                        </div> 
                        <div class="form__item">
                            <label for="txtName" class="form-label form__item__title">姓名:</label>
                            <div class="form__item__box">
                                <input type="text" name="Name" id="txtName" class="form-control" placeholder="請輸入您的姓名" required>
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="txtData" class="form-label form__item__title">出生日期:</label>
                            <div class="form__item__box">
                                <input type="date" name="txtDate2" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form__item"> 
                                <label class="form__item__title">性別:</label>
                                <div class="form__item__radio">
                                    <input class="form-check-input" type="radio" name="radGender" id="male" value="男" required>
                                    <label class="form-check-label" for="male" style="font-weight:bolder">男</label>
                                </div>
                                <div class="form__item__radio">
                                    <input class="form-check-input" type="radio" name="radGender" id="female" value="女" required>
                                    <label class="form-check-label" for="female" style="font-weight:bolder">女</label>
                                </div>
                        </div> 
                        <div class="form__item">
                            <label for="txtName" class="form-label form__item__title">手機:</label>
                            <div class="form__item__box">
                                <input type="tel" name="txtTelsmart" id="" class="form-control" pattern="[0][9][0-9]{8}" placeholder="請輸入09-xxxxxxxx" maxlength="10" required>
                            </div>
                        </div>
                        <div class="form__item">
                            <label for="txtName" class="form-label form__item__title">市話:</label>
                            <div class="form__item__box">
                                <input type="tel" name="txtTel" id="" class="form-control" pattern="[0][7][0-9]{8}" placeholder="請輸入07-xxxxxxxx" maxlength="10" required>
                            </div>
                        </div>
                        <div class="form__item">
                        <label for="colFormLabel" class="form-label form__item__title">信箱:</label>
                            <div class="form__item__box">
                                <input type="email" name="txtEmail" class="form-control" id="colFormLabel" placeholder="@gmail.com" required>
                            </div>
                        </div>
                        <select class="form-select" aria-label="Default select example" name="hospital">
                            <option selected>請選擇要接種疫苗的區公所</option>
                            <option value="高雄市鹽埕區公所">高雄市鹽埕區公所</option>
                            <option value="高雄市鼓山區公所">高雄市鼓山區公所</option>
                            <option value="高雄市左營區公所">高雄市左營區公所</option>
                            <option value="高雄市楠梓區公所">高雄市楠梓區公所</option>
                            <option value="高雄市三民區公所">高雄市三民區公所</option>
                            <option value="高雄市新興區公所">高雄市新興區公所</option>
                            <option value="高雄市前金區公所">高雄市前金區公所</option>
                            <option value="高雄市苓雅區公所">高雄市苓雅區公所</option>
                            <option value="高雄市前鎮區公所">高雄市前鎮區公所</option>
                            <option value="高雄市旗津區公所">高雄市旗津區公所</option>
                            <option value="高雄市小港區公所">高雄市小港區公所</option>
                            <option value="高雄市鳳山區公所">高雄市鳳山區公所</option>
                            <option value="高雄市林園區公所">高雄市林園區公所</option>
                            <option value="高雄市大寮區公所">高雄市大寮區公所</option>
                            <option value="高雄市大樹區公所">高雄市大樹區公所</option>
                            <option value="高雄市大社區公所">高雄市大社區公所</option>
                            <option value="高雄市仁武區公所">高雄市仁武區公所</option>
                            <option value="高雄市鳥松區公所">高雄市鳥松區公所</option>
                            <option value="高雄市岡山區公所">高雄市岡山區公所</option>
                            <option value="高雄市橋頭區公所">高雄市橋頭區公所</option>
                            <option value="高雄市燕巢區公所">高雄市燕巢區公所</option>
                            <option value="高雄市田寮區公所">高雄市田寮區公所</option>
                            <option value="高雄市阿蓮區公所">高雄市阿蓮區公所</option>
                            <option value="高雄市路竹區公所">高雄市路竹區公所</option>
                            <option value="高雄市湖內區公所">高雄市湖內區公所</option>
                            <option value="高雄市茄萣區公所">高雄市茄萣區公所</option>
                            <option value="高雄市永安區公所">高雄市永安區公所</option>
                            <option value="高雄市彌陀區公所">高雄市彌陀區公所</option>
                            <option value="高雄市梓官區公所">高雄市梓官區公所</option>
                            <option value="高雄市旗山區公所">高雄市旗山區公所</option>
                            <option value="高雄市美濃區公所">高雄市美濃區公所</option>
                            <option value="高雄市六龜區公所">高雄市六龜區公所</option>
                            <option value="高雄市甲仙區公所">高雄市甲仙區公所</option>
                            <option value="高雄市杉林區公所">高雄市杉林區公所</option>
                            <option value="高雄市內門區公所">高雄市內門區公所</option>
                            <option value="高雄市茂林區公所">高雄市茂林區公所</option>
                            <option value="高雄市桃源區公所">高雄市桃源區公所</option>
                            <option value="高雄市那瑪夏區公所">高雄市那瑪夏區公所</option>
                        </select>
                        <div class="form__item">
                            <label for="colFormLabel" class="form-label form__item__title">請上傳身分證(正反面):</label>
                            <div class="form__item__box">
                                <input class="form-control" type="file" id="formFile" name="myfile[]" multiple required>
                                <input type=hidden name=max_file_size value=1024>
                            </div>
                        </div>
                        <!--<div class="form__item">
                            <label for="colFormLabel" class="form-label form__item__title">請上傳身分證(反面):</label>
                            <div class="form__item__box">
                                <input class="form-control" type="file" id="formFile" name="myfile[]" multiple required>
                                <input type=hidden name=max_file_size value=1024>
                            </div> 
                        </div>-->
                        <p>(<font color="#E60000">注意</font>:檔案大小不能超過2MB，最多一次只可以上傳兩個檔案)</p>
                        <div class="btn-group">
                            <input type="submit" class="button" value="確認">
                            <input type="reset" class="button" value="取消">
                        </div>
                    </div>  
            </form>
        </div>
    </section>
    <!--Footer-->
    <footer>
            
            <div class="footer-bottom">
                <p>copyright &copy; Designed by 2021  </p>
            </div>
    </footer>
</body>
</html>





    