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
	
	$nicheng   = $_POST["uname"];     //注册信息获取
	$name      = $_POST["tname"];
	$number    = $_POST["num"];
	$password  = $_POST["password"];
	$phone     = $_POST["phonenum"];
	$cpassword = $_POST["cpassword"];
	
	if($cpassword != $password)
	{
		echo "两次密码输入不一致，请重新输入！";
		return;
	}
	
	session_start();							//验证验证码
	$str_number = trim($_POST['yanzhengma']);
	if(strtolower($_SESSION['rand']) != strtolower($str_number )) //忽略大小写
	{
		echo "验证码输入错误！请重新输入！";
	}
	else
	{
		$sql = "INSERT INTO usersinformation(nicheng, name, number, password, phone) VALUES ('$nicheng','$name',$number,'$password','$phone')";
		$dbh -> query("SET NAMES 'utf8'");    //中文转码
		$flag = $dbh -> query($sql);		//数据库写入数据
		if($flag)
			echo "恭喜你，注册成功！";
		else
			echo "注册失败";
	}
	
	$dbh = null;    //关闭数据库连接
?>