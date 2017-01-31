<?php


$connect= mysql_connect("localhost","ithinkx1_jaiwant","jaiwantbhushaN1") or die("CANT CONNECT");
mysql_select_db("ithinkx1_users") or die("cant find db");


$q = $_REQUEST["q"];

$hint = "";


 $query = "SELECT text FROM `chat`"; 
   $result = mysql_query($query) or die (mysql_error());
   
   
   
mysql_query("INSERT into chat(text)VALUES('$q')");

   
   ?><br><?php
    if($result) 
   {    
      while($row=mysql_fetch_row($result))   
       {      
         echo $row[0], PHP_EOL;
         
         ?><br><?php

       }    
     }
   else
     { 
       echo "No result";  
     }




?>