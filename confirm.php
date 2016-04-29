<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<title>開放式討論區</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  </head>
  <body>
<?php
	
	
	$ctopic = $_POST["ctopic"];
	$content = $_POST["content"];
	$date = date("Y-m-d H:i:s");
	$youtube = $_POST["youtube"];
	$id = $_COOKIE["user"];
	
	if($_COOKIE["passed"]!="TRUE"){
		
		echo "您需要登入後才能發文";
		
		?>
		<input type ="button" onclick="history.back()" value="回到上一頁"></input>
		
	<?php	
	}else{
		require_once("mysql_connect.inc.php");
		$link = create_connection();
		$sql = "insert into chatroom(chatid,chattopic, chatcontent,chatdate,chatyoutube)VALUES ('$id','$ctopic', '$content', '$date','$youtube');";
		$result = execute_sql($link,"forum",$sql);
		mysqli_close($link);
		header("location:index.php");
		exit();
	}

?>

</body>
</html>
