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
	
    <div data-role="page">
		  <div data-role="header">
			<h1>開放式討論區</h1>
		  </div>
		  <div data-role="content">
		  <?php
				if(!$_COOKIE["passed"]||!$_COOKIE["managerpassed"]){
					header("Location:setcookies.php" );
				}

				
				$passed =$_COOKIE["passed"];
				$managerpassed =$_COOKIE["managerpassed"];
				if($passed&&$managerpassed=="FALSE"){
					
					?>
					<div data-role="fieldcontain">
					<input type="button" value="會員登入" onclick="location.href='login_in.php'">
					<input type="button" value="註冊會員" onclick="location.href='registerview.php'">
					</div>
					
					
					<?php
						}else{
					?>
					
					<div data-role="fieldcontain">
					<input type="button" value="會員登出" onclick="location.href='login_out.php'">
					</div>
					
					<?php
				}
			
			?>
			<div data-role="fieldcontain">
			<form  action="confirm.php" method="post" name="a">
				
				<div data-role="fieldcontain">
					<label for="ctopic" >主題:</label></br>
					<input type="text"   name="ctopic">
					
				</div>
				
					
				<div data-role="fieldcontain">
					<label for="content">內容:</label></br>
					<input type="text"  name="content">
				</div>
				<div data-role="fieldcontain">
					<label for="youtube" >您要分享的影片:</label></br>
					<input type="text"  name="youtube">
				</div>
				<div data-role="fieldcontain">
					<input type="submit" name="Submit" value="確定">
				</div>
			</form>
			</div>
		
			
			
			<?php
				
			
				require_once("mysql_connect.inc.php");
				$link = create_connection();
				$sql = "SELECT * FROM chatroom ORDER BY chatdate DESC";
				$result = execute_sql($link,"forum",$sql);
				$total_records = mysqli_num_rows($result);
				for ($y=0;$y<($total_records);$y++){
					$row=mysqli_fetch_array($result);
					$db_data[$y]=$row;
				}
				
				for ($y=0;$y<($total_records);$y++){
					echo '<table style="border:5px #cccccc solid;" rules="all" cellpadding=5>';
					echo '<tr>';
					echo '<td align="left">'.'暱稱'.$db_data[$y][0].'</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td align="left">'.'主題'.$db_data[$y][1].'</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td align="left">'.'內容'.$db_data[$y][2].'</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td align="left">'.'發文時間'.$db_data[$y][3].'</td>';    
					echo '</tr>';
					echo '<tr>';
					echo '<td align="left">';
						$youlink =$db_data[$y][4];
						$youlink=str_replace ('watch?v=','embed/',$youlink);
					echo   '<iframe width="560" height="315" src="'.$youlink.'" frameborder="0" allowfullscreen></iframe>';
					echo '</td>';    
					echo '</tr>';
					?>	
						<tr>
						<td align="left">
						<form method="post" action="delete.php">
						<div data-role="fieldcontain">
						<input type="hidden" name="post_id" value="<?php echo $db_data[$y][0] ?>">
						<input type="submit" name="Submit" value="刪除">
						</div>
						</form>
						</td>
						</tr>
					<?php
					echo '<br>' ;
					echo '</table>';
				}
				
				 mysqli_close($link);
			?>
			
			
			
		  </div>
    </div>  
  </body>
</html>
