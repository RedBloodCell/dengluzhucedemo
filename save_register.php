<?php
	$dsn      = 'mysql:dbname=test;host=127.0.0.1';  //连接数据库
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
	
	$uname     = $_POST["uname"];			//获取注册信息
	$tname     = $_POST["tname"];
	$user_num  = $_POST["num"];
	$phone_num = $_POST["phonenum"];
	$pass      = $_POST["password"];
	
	$sql = "INSERT INTO userinfo(Tname, password, number, phone, Uname) VALUES ('$tname','$pass',$user_num,'$phone_num','$uname')";
	$dbh -> query("SET NAMES 'utf8'");    //数据库写入注册信息
	$flag = $dbh -> query($sql);
	if($flag)
		echo "恭喜你，注册成功！";
	else
		echo "注册失败" . $e -> getMessage();
	$dbh = null;
?>