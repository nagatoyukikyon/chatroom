!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
   <body>
	<?php
		
		$passed =$_COOKIE["managerpassed"];
		$delete_id =$_POST["post_id"];
		if($passed=="TRUE"){
				
			require_once("mysql_connect.inc.php");
			$link = create_connection();
			$sql = "delete from chatroom where chatid ="."'".$delete_id."';";
			$result = execute_sql($link,"forum",$sql);
			mysqli_close($link);
			header("location:index.php");
				
		}else{

			echo "你的權限不足".'<br>';
			echo '<a href="index.php">回到首頁</a>';

		}





	?>
</body>
</html>
