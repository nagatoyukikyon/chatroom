<html>
  <head>
    <meta charset="utf-8">
	<title>匿名聊天室</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<SCRIPT type="text/javascript">
       		
		function check()
		{
		      
		        if(input.name.value == "") 
		        {
		                alert("未輸入姓名");
		        }
		       
		        else if(input.class.value == "" || input.grade.value == "" )
		        {
		                alert("未輸入年級和班級");
		        }
			else if(input.account.value == "" || input.password.value == "" )
		        {
		                alert("未輸入帳號密碼");
		        }
		       
		        
		        else input.submit(); 
		 }
	</SCRIPT>
	<style>
		.ui-input-text{max-width:600px !important ;}
		.ui-input-int{max-width:600px !important ;}
		.ui-btn {
   				 width: 200px !important;
		}
		.in
		{
			
			margin: 10px;
    			padding: 5px;
			border: 2px solid #666;
			
			
		}
		
		
	</style>	
	
  </head>
  <body> 
	<div data-role="page">
		<div data-role="header">
			<h1>註冊會員</h1>	
		</div>	
		<div class ="in">

			<div class ="form">
	   			<form name="input" method="post" action="register.php" >
					<label for="grade">年級</label>
					<input type="int" name="grade" id="grade"  />
					<label for="class">班級</label>
					<input type="int" name="class" id="class"  />
	 				<label for="name">姓名</label>
					<input type="text" name="name" id="name"  />
	 				<label for="account">帳號</label>
					<input type="text" name="account" id="account"  />
	 				<label for="basic">密碼</label>
					<input type="password" name="password" id="password"  />
	 				<input type="button" value="傳送" onClick="check()" />
					<input type="reset" value="清除" />
	 
	 
				</from>
			</div>
 		</div>


	</div>  
  </body>
</html>
