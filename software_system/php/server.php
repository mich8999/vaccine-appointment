<?php
    session_start();
    $email= "";
    $errors = array();
    $db = mysqli_connect('localhost','root','','login_1')
            or die("不能連到資料庫");//連結資料庫

    //點擊註冊button
    if(isset($_POST['register'])){
        //$email = mysql_real_escape_string($_POST['email']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

        if(empty($email)){
            //array_push($errors,"請輸入信箱");
            //echo"<script>alert('請輸入信箱')</script>";
        }
        if(empty($password_1)){
            //array_push($errors,"請輸入密碼");
            //echo"<script>alert('請輸入密碼')</script>";
        }

        if($password_1 != $password_2){
            array_push($errors,"兩組密碼不相同");
            //echo"<script>alert('兩組密碼不相同')</script>";
        }

        //如果沒有錯誤，儲存使用者帳密到資料庫
        if(count($errors)==0){
            $password = md5($password_1); //將資料庫的密碼加密變成亂碼
            $sql = "INSERT INTO logintable (email,password) 
                    VALUES('$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION['email'] = $email;
            //$_SESSION['success'] = "你已經成功註冊";
            header('Location:register_success.php');
          
        }
        
    }

    //使用者按下登入button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db,$_POST['password']);

        if(empty($email)){
           //array_push($errors,"請填入信箱");
           //echo"<script>alert('請輸入信箱')</script>";
        }
        if(empty($password)){
            //array_push($errors,"請填入密碼");
            //echo"<script>alert('請輸入密碼')</script>";
        }

        
        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM logintable WHERE email='$email' AND password='$password'";
            $result= mysqli_query($db,$query);
            if(mysqli_num_rows($result) == 1){
                //log user in
                $_SESSION['email'] = $email;
                //$_SESSION['success'] = "你已經成功註冊";
                header('Location:home.php');
            }else{
                array_push($errors,"帳號或密碼錯誤");
                //echo"<script>alert('帳號或密碼錯誤')</script>";
            }
        }
    }

    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['email']);
        header('Location:login.php');
    }
?>