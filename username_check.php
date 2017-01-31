<?php


$connect= mysql_connect("localhost","ithinkx1_jaiwant","jaiwantbhushaN1") or die("CANT CONNECT");
mysql_select_db("ithinkx1_users") or die("cant find db");


$q = $_REQUEST["q"];


 $query = "SELECT user FROM `users` where user='$q'"; 
   $result = mysql_query($query) or die (mysql_error());
   
   
 if(mysql_fetch_row($result)[0]){
 	echo "Not Valid!";
 }
 else{
 	echo "Username Valid!";
 }
     




?>