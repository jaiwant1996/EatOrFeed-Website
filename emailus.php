<?php
session_start();

$date = date('Y-m-d H:i:s');
$user= stripslashes($_POST['username_reg']);
$pass= stripslashes($_POST['password']);
$emailus= stripslashes($_POST['emailus']);
$ipaddr= $_SERVER['REMOTE_ADDR'];
$ipaddr2= $_SERVER['HTTP_X_FORWARDED_FOR'];
echo $user,$pass,$email;


if($emailus==""):
{
	header("location:index.php");
}
else:
{
$connect= mysql_connect("localhost","ithinkx1_jaiwant","jaiwantbhushaN1") or die("CANT CONNECT");
mysql_select_db("ithinkx1_users") or die("cant find db");

mysql_query("INSERT into emailUS(email)VALUES('$emailus')");

header("location:emailus_success.php");
}
endif;












?>