<?php
	$dsn      = 'mysql:dbname=test;host=127.0.0.1';  //数据库连接
	$user     = 'root';
	$password = '1234567890';
	try 
	{
		$dbh = new PDO($dsn, $user, $password);
	} 
	catch (PDOException $e) 
	{
		echo 'Connection failed: ' . $e->getMessage();
	}
	
	$user_num = $_POST['usernum'];		//获取登录信息
    $pass     = $_POST['password'];
	
	$sql="SELECT password 			
		  FROM userinfo 
		  WHERE number = $user_num";   //数据库查询
	foreach( $dbh -> query($sql) as $row) 
	{
         if($row[0] == $pass)          //验证登录密码
		 {
			$dbh -> query("SET NAMES 'utf8'");
			echo '欢迎你，登录成功！';
		 }
		else
			echo '密码错误';
    }
	
	$dbh = null;     //关闭数据库连接
?>