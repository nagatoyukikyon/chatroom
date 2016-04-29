<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
   <body>
<?php

		
$account = $_POST['account'];
$password = $_POST['password'];
$chk = false ;
		if($account=="root"&&$password=="123456")
		{
		setcookie("managerpassed","TRUE");
		setcookie("passed","TRUE");
		setcookie("user","manager");
		header("location:index.php");

		}else{
		
			require_once("mysql_connect.inc.php");
			$link = create_connection();
			$sql = "SELECT * FROM  member";
			$result = execute_sql($link,"forum",$sql);
			$total_records = mysqli_num_rows($result);
			for ($y=0;$y<($total_records);$y++){
				$row=mysqli_fetch_array($result);
				$db_data[$y]=$row;
			
				if($db_data[$y][1]==$account &&$db_data[$y][2]==$password ){
				
					$chk = true ;
					setcookie("user",$db_data[$y][4]);
				}
			}
			mysqli_close($link);


			if($chk)
			{
		
			setcookie("passed","TRUE");
			echo '<a href="index.php">登入成功,按此回首頁</a>';
			header("Refresh: 3; url=index.php");
		

			}else{
			setcookie("passed","FALSE");
			echo '<a href="login_in.php">帳號密碼錯誤,請重新輸入</a>';
			header("Refresh: 3; url=login_in.php");
	
			}

		}

?>
</body>
</html>
