
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <script src="https://kit.fontawesome.com/753f35d59e.js" crossorigin="anonymous"></script>
    <link href=".\assets\css\bootstrap.min.css" rel="stylesheet">
    <script src=".\assets\js\bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./result.css">
    <script src="progress-bar.js"> </script>
    <title>資料確認</title>
    <script>
         function goBack(){
            window.history.back();
         }
    </script>
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

    <div class="background-result">

                <div class="image">
                    <img src="./assets/image/color.png" alt="background">
                </div>

                <div class="image-overlay">
                    <div class="result-title">
                        <i class="far fa-hand-point-right"></i>
                            <?php echo '預約成功';?>
                        <i class="far fa-hand-point-left"></i>
                    </div>

                    <div class="result-content">
                        <?php
                                /*echo '資料結果如下：'.'<br>';*/
                                $txtDate1=$_POST['txtDate1']; //接種日期
                                $option=$_POST['option'];  //劑別
                                $Name=$_POST['Name'];        //姓名
                                $txtDate2=$_POST['txtDate2']; //出生日期
                                $radGender=$_POST['radGender']; //性別
                                $txtTelsmart=$_POST['txtTelsmart']; //手機
                                $txtTel=$_POST['txtTel'];     //市話
                                $txtEmail=$_POST['txtEmail']; //mail
                                $hospital=$_POST['hospital']; //區公所
                            
                                echo '接種日期 : ' .$txtDate1.'<br>';
                                if($option=="第一劑"){
                                    echo '劑別 : ' .'第一劑'.'<br>';
                                }
                                else
                                {
                                    echo '劑別 : ' .'第二劑'.'<br>';
                                }
                                echo '姓名 : ' .$Name.'<br>';
                                echo '出生日期 : ' .$txtDate2.'<br>';
                                if($radGender=="男"){
                                    echo '性別 : ' .'男'.'<br>';
                                }
                                else
                                {
                                    echo '性別 : ' .'女'.'<br>';
                                }
                                echo '手機 : ' .$txtTelsmart.'<br>';
                                echo '市話 : ' . $txtTel.'<br>';
                                echo '信箱 : ' . $txtEmail.'<br>';
                                echo '選擇要接種疫苗的區公所 : ' .$hospital.'<br>';

                            
                                // 取得上傳檔案數量
                                $fileCount = count($_FILES['myfile']['name']);

                                for ($i = 0; $i < $fileCount; $i++) {
                                // 檢查檔案是否上傳成功
                                if ($_FILES['myfile']['error'][$i] === UPLOAD_ERR_OK){
                                    echo'身分證(正反面)如下:<br>';
                                    echo '檔案名稱: ' . $_FILES['myfile']['name'][$i] . '<br/>';
                                    echo '檔案類型: ' . $_FILES['myfile']['type'][$i] . '<br/>';
                                    echo '檔案大小: ' . ($_FILES['myfile']['size'][$i] / 1024) . ' KB<br/>';
                                    //echo '暫存名稱: ' . $_FILES['myfile']['tmp_name'][$i] . '<br/>';

                                    //檢查檔案是否已經存在
                                    if (file_exists('upload/' . $_FILES['myfile']['name'][$i])){
                                    echo '<span style="color:#ff0000;">檔案已存在，請勿重複上傳。<br/></span>';
                                    } else {
                                    $file = $_FILES['myfile']['tmp_name'][$i];
                                    $dest = 'upload/' . $_FILES['myfile']['name'][$i];

                                    //將檔案移至指定位置
                                    move_uploaded_file($file, $dest);
                                    }
                                } else {
                                    echo '錯誤代碼：' . $_FILES['myfile']['error'] . '<br/>';
                                }
                            }
                        ?>
                    </div>
                </div>
    </div>

    <div class="btn-group">
        <br><button name="goback" class="btn" onclick="goBack()">回前一頁</button>
    </div>

    <footer>
            <div class="footer-bottom">
                <p>copyright &copy; Designed by 2021  </p>
            </div>
    </footer>
    

</body>

</html>