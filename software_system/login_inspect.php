<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
if(!isset($_POST["submit"])){
exit("錯誤執行");
}//檢測是否有submit操作 
include('connect.php');//連結資料庫
$email = $_POST['email'];//post獲得使用者名稱錶單值
$password = $_POST['password'];//post獲得使用者密碼單值

if ($email && $password){//如果使用者名稱和密碼都不為空
	$sql = "select * from logintable where email = '$email' and password='$password'";//檢測資料庫是否有對應的username和password的sql
	$result = mysql_query($sql);//執行sql
	$rows=mysql_num_rows($result);//返回一個數值
	$list=mysql_fetch_array($result);
	$_SESSION['authority']=$list['authority'];
	$_SESSION['name']=$list['name'];
	$_SESSION['room_id']=$list['room_id'];
	
	if($rows){//0 false 1 true
		if($_SESSION['authority']=="user"){
			header("refresh:0;url=taipei_city.php");//如果成功跳轉至welcome.html頁面
			exit;
		}
		else{
			header("refresh:0;url=index_manager_1.php");//如果成功跳轉至welcome.html頁面
			exit;
		}
}
else{
?>
	<script>
			window.alert('帳號或密碼輸入錯誤!');
			history.back();
	</script>
	<?php
	}
}
else{//如果使用者名稱或密碼有空
	?>
	<script>
			window.alert('資料填寫不完整!');
			history.back();
	</script>
	<?php
	}
mysql_close();//關閉資料庫
	?>