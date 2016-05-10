<html>
	<head>
		<title>登录界面测试</title>
	</head>
	<body>
		<h1><center>图书馆登录界面</center></h1>
		<center>
		<form method="post" action="save.php">
			<label for = "username">学 号:</label>
			<input type="text" name="username" id="username" value="" />
			<br>
			<label for="password">密  码:</label>
			<input type="password" name="password" id="password" value=""/>
			<br>
			<input type="submit" name="登录" id="login" value="登录"/>
			<a href="register.php"><input type="button" name="register" id="register" value="注册"></input></a>
		</form>
		</center>
	</body>
</html>