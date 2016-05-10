<?php
    $username=$_POST['username'];
    $pass=$_POST['password'];
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '1234567890';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$sql="SELECT * FROM userinfo WHERE number=$username";
    foreach ($dbh->query($sql) as $row)
    {
        print $row['Tname']."\t";
    }
echo '11111';
?>