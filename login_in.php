<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<title>管理員登入</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
  </head>
  <body>
    <div data-role="header">
			<h1>管理員登入</h1>
	</div>
	<div data-role="content">
		<form action="chkpass.php" method="post" name="myForm">
			<div data-role="fieldcontain">
			<font color="#3333FF">帳號:</font> 
			<input name="account" type="text" size="15">
			 </div>
			 
			<div data-role="fieldcontain">
			<font color="#3333FF">密碼:</font> 
			<input name="password" type="password" size="15">
			</div>
		  
			<div data-role="fieldcontain">
			<input type="submit" value="確認" >
			</div>
			<div data-role="fieldcontain">
			<input type="reset" value="重新填寫">
			</div>
		   
	  
		</form>
	</div>
  </body>
  
</html>