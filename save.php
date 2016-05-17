<?php
	$dsn      = 'mysql:dbname=test;host=127.0.0.1';
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
	
	$user_num = $_POST['usernum'];
    $pass     = $_POST['password'];
	
	$sql="SELECT password 
		  FROM userinfo 
		  WHERE number = $user_num";
	$flag = $dbh -> query($sql)
    if($flag == $pass)
		echo '登录成功';
	else
		echo '密码错误';
	
	$dbh = null;
?>