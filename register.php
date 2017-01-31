<?php
session_start();

$date = date('Y-m-d H:i:s');
$user= stripslashes($_POST['username_reg']);
$pass= stripslashes($_POST['password']);
$email= stripslashes($_POST['emailid']);
$ipaddr= $_SERVER['REMOTE_ADDR'];
$ipaddr2= $_SERVER['HTTP_X_FORWARDED_FOR'];
echo $user,$pass,$email;

$_SESSION['name']=$user;

if($user==""||$pass==""||$email==""):
{
	header("location:index.php");
}
elseif($user=="test"&&$pass=="test"&&$email=="test"):
{
	header("location:reg_success.php");
}
else:
{
$connect= mysql_connect("localhost","ithinkx1_jaiwant","jaiwantbhushaN1") or die("CANT CONNECT");
mysql_select_db("ithinkx1_users") or die("cant find db");

mysql_query("INSERT into users(user,pass,email,ipaddr,ipaddr2,datetime)VALUES('$user','$pass','$email','$ipaddr','$ipaddr2','$date')");

header("location:reg_success.php");
}
endif;












?>