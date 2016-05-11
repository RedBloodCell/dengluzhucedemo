<?php
	$dsn = 'mysql:dbname=test;host=127.0.0.1';  //连接数据库
	$user = 'root';								
	$password = '1234567890';
	
	try 
	{
		$dbh = new PDO($dsn, $user, $password);
	} 
	catch (PDOException $e) 
	{
		echo 'Connection failed: ' . $e->getMessage();
	}

	$tname=$_POST["tname"];
	$uname=$_POST["uname"];
	$phone_num=$_POST["phone"];
	$user_num=$_POST["num"];
	$pass=$_POST["pass"];

	$sql="INSERT INTO userinfo(Tname, password, number, phone, Uname) VALUES ('$tname','$pass',$user_num,'$phone_num','$uname')";
	
	try
	{
		$dbh -> query("SET NAMES 'utf8'");
		$flag = $dbh->exec($sql);
		if($flag == 1)
			echo "注册成功";
	}
	catch (PDOException $e)
	{
		echo $e->getMessage();
	}
?>