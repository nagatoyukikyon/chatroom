<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<title>註冊</title>


  </head>
  <body>
<?php
	
	
	$member_grade = $_POST["grade"].$_POST["class"];
	$member_name = $_POST["name"];
	$member_account = $_POST["account"];
	$member_password= $_POST["password"];
	$check = true ;
	
		
		require_once("mysql_connect.inc.php");
		$link = create_connection();
		$sql = "SELECT * FROM  member";
		$result = execute_sql($link,"forum",$sql);
		$total_records = mysqli_num_rows($result);
		for ($y=0;$y<($total_records);$y++){
			$row=mysqli_fetch_array($result);
			$db_data[$y]=$row;
			
			if($db_data[$y][1]==$member_account ||$db_data[$y][3]==$member_name){
				
				$check = false ;

			}
		}
		mysqli_close($link);
		

		if($check==true){ 
			require_once("mysql_connect.inc.php");
			$link = create_connection();
			$sql = "insert into member(member_grade, member_name,member_account,member_password) VALUES ('$member_grade','$member_name', '$member_account', '$member_password');";
			$result = execute_sql($link,"forum",$sql);
			mysqli_close($link);
			echo '<a href="index.php">註冊成功,按此回首頁</a>';
			header("Refresh: 3; url=index.php");
			
			
			
		
		}else{
			mysqli_close($link);
			echo '<a href="registerview.php">已經有此帳號，請換一個重新註冊/a>';
			header("Refresh: 3; url=registerview.php");
			
		}
	

?>

	</body>
</html>
